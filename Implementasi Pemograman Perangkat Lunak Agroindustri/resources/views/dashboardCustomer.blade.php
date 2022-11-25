@extends('layouts.main')

@section('container')

@if(session()->has('message'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{ session('message') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- CARD REKOMENDASI -->
<p class="fw-bold fs-3 pl-4"><i class="fa-solid fa-circle-check"></i> Rekomendasi</p>
<div class="container-fluid">
    <div class="row">
        @foreach($dataProdukRekomendasi as $produkRekomendasi)
        <div class="col-lg-3">
            <div class="cards pt-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $produkRekomendasi->thumbnail ) }}" class="card-img-top" alt="Produk Rekomendasi pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produkRekomendasi->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $produkRekomendasi->description }}.</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $produkRekomendasi->price }} /kg</p>
                        <p class="card-text fw-bold text-success">Tersedia - {{ $produkRekomendasi->amount }} Ton</p>
                        <a href="/detailMitra/{{ $produkRekomendasi->user_id }}?id={{ $dataCustomer->id }}"><img class="border border-light rounded-circle shadow" src="{{ asset('storage/'. $mitraImage ) }}" alt="foto mitra" rounded-circle width="45"></a>
                        <a href="/detailProduk/{{ $produkRekomendasi->title }}?id={{ $dataCustomer->id }}" class="btn btn-success float-end">Checkout</a>
                        <a href="/detailUlasan/{{ $produkRekomendasi->id }}?id={{ $dataCustomer->id }}" class="btn btn-secondary float-end">Ulasan</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-- CARD PRODUK -->
<p class="fw-bold fs-3 pl-4 pt-5"><i class="fa-solid fa-cube"></i></i> Produk Petani</p>
<div class="container-fluid">
    <div class="row">

        @foreach($dataProduk as $produk)
        <div class="col-lg-3">
            <div class="cards pt-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $produk->thumbnail ) }}" class="card-img-top" alt="Produk pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $produk->description }}.</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $produk->price }} /kg</p>
                        <p class="card-text fw-bold text-success">Tersedia - {{ $produk->amount }} Ton</p>
                        <a href="/detailMitra/{{ $produk->user_id }}?id={{ $dataCustomer->id }}"><img class="border border-light rounded-circle shadow" src="{{ asset('storage/'. $mitraImage ) }}" alt="foto mitra" rounded-circle width="45"></a>
                        <a href="/detailProduk/{{ $produk->title }}?id={{ $dataCustomer->id }}" class="btn btn-success float-end">Checkout</a>
                        <a href="/detailUlasan/{{ $produk->id }}?id={{ $dataCustomer->id }}" class="btn btn-secondary float-end">Ulasan</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


@endsection