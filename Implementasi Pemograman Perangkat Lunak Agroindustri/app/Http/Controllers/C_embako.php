<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Pemesanan;
use App\Models\Product;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Pembayaran;


class C_embako extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function dokumentasi()
    {
        return view('welcome');
    }

    public function registrasi()
    {
        return view('registrasi');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:customers'],
            'email' => ['required', 'email:dns', 'unique:customers'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Customer::create($validatedData);

        return redirect('/login')->with('status', 'Registrasi berhasil! Silahkan login');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $auth = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        $password = $auth['password'];
        $dabes = DB::table('customers')
            ->select('customers.*')
            ->where('customers.email', '=', $auth['email'])
            ->get();

        $idCustomer = $dabes['0']->{'id'};

        // Custom Authentication
        if ($dabes['0']->{'email'} === $auth['email']) {
            if (Hash::check($password, $dabes['0']->{'password'})) {
                $request->session()->regenerate();

                return redirect('/dashboard_customer/' . $idCustomer);
            }
            return back()->with('loginError', 'Login Failed!');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function dashboard_Customer($idCustomer)
    {
        $dataProdukRekomendasi = $dataProduk = Product::where('recommendation', '1')->get();
        $dataProduk = Product::all();
        foreach ($dataProduk as $produk) {
            $mitraImage = $produk->user->image;
            // dd($mitraImage);
        }
        // dd($dataProdukRekomendasi);

        return view('dashboardCustomer', [
            'title' => "Dashboard",
            'dataCustomer' => Customer::find($idCustomer),
            'dataProduk' => $dataProduk,
            'dataProdukRekomendasi' => $dataProdukRekomendasi,
            'mitraImage' => $mitraImage
        ]);
    }

    public function profileCustomer(Request $request)
    {
        $idCustomer = $request->input('id');
        return view('profileCustomer', [
            'title' => "Dashboard",
            'dataCustomer' => Customer::find($idCustomer),
        ]);
    }

    public function buktiPembayaran(Request $request)
    {
        $idCustomer = $request->input('id');
        return view('buktiPembayaran', [
            'title' => "Pemesanan",
            'dataCustomer' => Customer::find($idCustomer),
            'dataPembayaran' => Pembayaran::where('customer_id', $idCustomer)->first()
        ]);
    }

    public function storePembayaran(Request $request)
    {
        $idCustomer = $request->input('id');
        $validatedData = $request->validate([
            'customer_id' => ['required', 'min:1', 'max:255'],
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('bukti-pembayaran');
        }

        Pembayaran::create($validatedData);

        return redirect('/pesanan/' . $idCustomer . '?id=' . $idCustomer)->with('message', 'Bukti Pembayaran Berhasil Ditambahkan! Silahkan hubungi mitra untuk pengiriman barang');
    }

    public function editCustomer(Request $request)
    {
        $idCustomer = $request->id;
        $dataCustomer = Customer::find($idCustomer);

        $rules = [
            'name' => ['required', 'min:5', 'max:255']
        ];

        if ($request->email != $dataCustomer->email) {
            $rules['email'] = ['required', 'email:dns', 'unique:users'];
        }

        if ($request->username != $dataCustomer->username) {
            $rules['username'] = ['required', 'min:5', 'max:255', 'unique:users'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validatedData['image'] = $request->file('image')->store('profiles');
        }

        Customer::where('id', $idCustomer)->update($validatedData);

        return redirect('/dashboard_customer/' . $idCustomer)->with('message', 'Data Diri Berhasil Diupdate!');
    }


    public function detailProduk(Request $request, Product $product)
    {
        $idCustomer = $request->input('id');
        return view('detailProduk', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),

            "detailProduk" => $product
        ]);
    }

    public function storeCheckout(Request $request, Product $product)
    {
        $idCustomer = $request->input('id');
        $idProduk = $product->id;

        $dataPemesanan = new Pemesanan;

        $dataPemesanan->customer_id = $idCustomer;
        $dataPemesanan->order_date = date("Y-m-d");
        $dataPemesanan->status = NULL;

        $dataPemesanan->save();

        $idPemesanan = $dataPemesanan->id;

        Product::where('id', $idProduk)->update(['pemesanan_id' => $idPemesanan]);

        return redirect('/pesanan/' . $idCustomer . '?id=' . $idCustomer)->with('message', 'Produk Berhasil Dichekout!');
    }

    public function deleteCheckout(Request $request, Pemesanan $pemesanan)
    {
        $idCustomer = $request->input('id');
        Pemesanan::destroy($pemesanan->id);

        return redirect('/dashboard_customer/' . $idCustomer)->with('message', 'Produk keluar dari chekout!');
    }






    public function detailMitra(Request $request, User $user)
    {
        $idCustomer = $request->input('id');
        return view('detailMitra', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),

            "detailMitra" => $user
        ]);
    }


    public function pesanan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        $pemesanan = DB::table('pemesanans')
            ->join('products', 'pemesanan_id', '=', 'pemesanans.id')
            ->join('customers', 'customers.id', '=', 'pemesanans.customer_id')
            ->select('products.title', 'products.thumbnail', 'products.description', 'pemesanans.id', 'pemesanans.order_date', 'pemesanans.status', 'products.price', 'products.amount')
            ->where('pemesanans.customer_id', '=', $id)
            ->get();

        $totalHarga = DB::table('pemesanans')
            ->leftJoin('products', 'pemesanan_id', '=', 'pemesanans.id')
            ->where('pemesanans.customer_id', '=', $id)
            ->sum('price');


        return view('pesanan', [
            'title' => 'Pemesanan',
            'dataCustomer' => Customer::find($idCustomer),
            'totalHarga' => $totalHarga,
            'dataPesanan' => $pemesanan
        ]);
    }

    public function detailUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        // Masalah disini (Kalo ga ada ulasan ga bisa tampil)
        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();

        return view('detailUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId,
            'dataUlasan' => Ulasan::where('product_id', $id)->get()
        ]);
    }

    public function tambahUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        // Masalah disini (Kalo ga ada ulasan ga bisa tampil)
        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();

        return view('tambahUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId
        ]);
    }



    public function storeUlasan(Request $request, $id)
    {
        $idCustomer = $request->input('id');
        $validatedData = $request->validate([
            'name' => ['required'],
            'customer_id' => ['required'],
            'product_id' => ['required'],
            'feedback' => ['required', 'min:5', 'max:255']
        ]);
        $productId = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->select('products.id')
            ->where('ulasans.product_id', '=', $id)
            ->first();
        $ulasan = DB::table('ulasans')
            ->join('products', 'products.id', '=', 'ulasans.product_id')
            ->join('customers', 'customers.id', '=', 'ulasans.customer_id')
            ->select('ulasans.name', 'ulasans.feedback', 'customers.image')
            ->where('ulasans.product_id', '=', $id)
            ->get();

        Ulasan::create($validatedData);

        return view('detailUlasan', [
            'title' => 'Dashboard',
            'dataCustomer' => Customer::find($idCustomer),
            'produkId' => $productId,
            'dataUlasan' => $ulasan
        ])->with('status', 'Ulasan berhasil ditambahkan');
    }
}
