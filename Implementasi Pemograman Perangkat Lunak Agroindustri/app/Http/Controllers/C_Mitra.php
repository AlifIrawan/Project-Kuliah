<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Pemesanan;
use App\Models\Product;
use App\Models\Pencatatan;
use App\Models\Ulasan;
use App\Models\User;
use App\Models\Pembayaran;
use App\Models\Pengeluaran;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;

class C_Mitra extends Controller
{
    public function registrasiMitra()
    {
        return view('mitraRegistrasi');
    }

    public function loginMitra()
    {
        return view('mitraLogin');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['affiliate'] = date('Y');

        User::create($validatedData);

        return redirect('/loginMitra')->with('status', 'Registrasi berhasil! Silahkan login');
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboardMitra');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboardMitra()
    {
        return view('dashboardMitra', [
            'title' => "Dashboard",
            'dataProduk' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function profileMitra()
    {
        return view('profileMitra', [
            'title' => "Dashboard"
        ]);
    }

    public function editProfile(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'min:5', 'max:255'],
            'image' => ['image', 'file'],
            'number' => ['required', 'min:12', 'max:12'],
            'address' => ['required', 'min:5', 'max:255'],
            'affiliate' => ['required', 'min:4', 'max:11']
        ];

        if ($request->email != auth()->user()->email) {
            $rules['email'] = ['required', 'email:dns', 'unique:users'];
        }

        if ($request->username != auth()->user()->username) {
            $rules['username'] = ['required', 'min:5', 'max:255', 'unique:users'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validatedData['image'] = $request->file('image')->store('profiles');
        }

        User::where('id', auth()->user()->id)->update($validatedData);

        return redirect('/dashboardMitra')->with('message', 'Data Diri Berhasil Diupdate!');
    }


    public function produk()
    {
        return view('dataProduk', [
            'title' => "Produk",
            'dataProduk' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function formTambahProduk()
    {
        return view('formTambahProduk', [
            'title' => "Produk"
        ]);
    }

    public function storeTambahProduk(Request $request)
    {
        // ddd($request);
        // return $request->file('thumbnail')->store('produk-images');

        $validatedData = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'thumbnail' => ['image', 'file'],
            'price' => ['required', 'min:5', 'max:255'],
            'amount' => ['required'],
            'description' => ['required', 'min:10', 'max:255'],
            'recommendation' => ['required', 'min:1']
        ]);

        if ($request->file('thumbnail')) {
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('produk-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Product::create($validatedData);

        return redirect('/produk')->with('message', 'Data Berhasil Disimpan!');
    }


    public function deleteProduk(Product $product)
    {
        if ($product->thumbnail) {
            Storage::delete($product->thumbnail);
        }
        Product::destroy($product->id);

        return redirect('/produk')->with('message', 'Data Berhasil Dihapus!');
    }


    public function editProduk(Product $product)
    {
        return view('formEditProduk', [
            'title' => "Produk",
            'detailProduk'  => $product
        ]);
    }

    public function updateProduk(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'thumbnail' => ['image', 'file'],
            'price' => ['required', 'min:5', 'max:255'],
            'amount' => ['required'],
            'description' => ['required', 'min:10', 'max:255'],
            'recommendation' => ['required', 'min:1']
        ]);

        if ($request->file('thumbnail')) {
            if ($request->oldThumbnail) {
                Storage::delete($request->oldThumbnail);
            }
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('produk-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Product::where('id', $product->id)->update($validatedData);

        return redirect('/produk')->with('message', 'Data Berhasil Diupdate!');
    }


    public function penjualan()
    {
        // problem di kalo inputan pertama dihapus codingan eror
        $dataPenjualan = Product::where('user_id', auth()->user()->id)->get();
        foreach ($dataPenjualan as $penjualan) {
            $customerId = $penjualan->pemesanan->customer_id;
            $dataCustomer = Customer::find($customerId);
        }

        return view('dataPenjualan', [
            'title' => "Penjualan",
            'dataProduk' => Product::where('user_id', auth()->user()->id)->get(),
            'dataCustomer' => $dataCustomer
        ]);
    }

    public function buktiTransaksi(Customer $customer)
    {
        $dataTransaksi = Pembayaran::where('customer_id', $customer->id)->first();
        // $dataPembayaran = $dataTransaksi->image;

        return view('buktiTransaksi', [
            'title' => "Penjualan",
            'dataPembayaran' => $dataTransaksi
        ]);
    }


    public function transaksi(Product $product)
    {
        return view('dataTransaksi', [
            'title' => "Penjualan",
            'detailProduk' => $product
        ]);
    }

    public function editTransaksi(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'status' => ['required']
        ]);


        Pemesanan::where('id', $product->pemesanan_id)->update($validatedData);

        return redirect('/penjualan')->with('message', 'Data Transaksi Berhasil Disimpan!');
    }


    public function pencatatan()
    {
        return view('dataPencatatan', [
            'title' => "Pencatatan",
            'dataPencatatan' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function ulasanMitra(Product $product)
    {
        $dataUlasan = Ulasan::where('product_id', $product->id)->get();
        foreach ($dataUlasan as $ulasan) {
            $customerId = $ulasan->customer_id;
            $dataCustomer = Customer::find($customerId);
        }

        return view('ulasanMitra', [
            'title' => "Dashboard",
            'dataUlasan' => $dataUlasan,
            'dataImage' => $dataCustomer
        ]);
    }

    public function deleteUlasan(Ulasan $ulasan)
    {

        Ulasan::destroy($ulasan->id);

        return redirect('/ulasan/' . $ulasan->product_id)->with('message', 'Data Berhasil Dihapus!');
    }

    public function pengeluaran()
    {
        return view('dataPengeluaran', [
            'title' => "Pengeluaran",
            'dataPengeluaran' => Pengeluaran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function tambahPengeluaran()
    {
        return view('formTambahPengeluaran', [
            'title' => "Pengeluaran"
        ]);
    }

    public function storeTambahPengeluaran(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'total' => ['required', 'min:5', 'max:255'],
            'date' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;


        Pengeluaran::create($validatedData);

        return redirect('/pengeluaran')->with('message', 'Data Berhasil Disimpan!');
    }


    public function deletePengeluaran(Pengeluaran $pengeluaran)
    {
        Pengeluaran::destroy($pengeluaran->id);

        return redirect('/pengeluaran')->with('message', 'Data Berhasil Dihapus!');
    }

    public function editPengeluaran(Pengeluaran $pengeluaran)
    {
        return view('formEditPengeluaran', [
            'title' => "Pengeluaran",
            'detailPengeluaran'  => $pengeluaran
        ]);
    }

    public function updatePengeluaran(Request $request, Pengeluaran $pengeluaran)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'total' => ['required', 'min:5', 'max:255'],
            'date' => ['required']
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Pengeluaran::where('id', $pengeluaran->id)->update($validatedData);

        return redirect('/pengeluaran')->with('message', 'Data Berhasil Diupdate!');
    }
}
