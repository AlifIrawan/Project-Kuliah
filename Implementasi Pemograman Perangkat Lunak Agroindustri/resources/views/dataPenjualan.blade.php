@extends('layouts.mainMitra')

@section('container')




<!-- CARD PRODUK -->
<p class="fw-bold fs-3 pl-4 pt-3"><i class="fa-solid fa-cart-shopping"></i> Daftar Pemesanan</p>
<a href="/buktiTransaksi/{{ $dataCustomer->id }}" class="btn btn-secondary ml-4">Cek Bukti</a>
<div class="container-fluid">
    @if(session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row">
        @foreach($dataProduk as $produk)
        <div class="col-lg-3">
            <div class="cards pt-2 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $produk->thumbnail ) }}" class="card-img-top" alt="Produk pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $produk->description }}.</p>
                        <p class="card-text fw-bold">Dibeli oleh {{ $dataCustomer->name }}</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $produk->price }} /kg</p>
                        <p class="card-text fw-bold text-success">Sebanyak - {{ $produk->amount }} Ton</p>
                        <p class="card-text fw-bold">Status Transaksi :
                        <p class="{{ ($produk->pemesanan->status == 1) ? 'text-success' : 'text-danger' }}"> {{ ($produk->pemesanan->status == 1) ? "Disetujui" : "Tidak Disetujui" }}</p>
                        </p>
                        <a href="/transaksi/{{ $produk->id }}" class="btn btn-success float-end">Cek Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



@endsection