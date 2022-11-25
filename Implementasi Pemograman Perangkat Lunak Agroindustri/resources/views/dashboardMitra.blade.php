@extends('layouts.mainMitra')

@section('container')


<!-- CARD PRODUK -->
<p class="fw-bold fs-3 pl-4 pt-5"><i class="fa-solid fa-cube"></i></i> Produk Anda</p>
<div class="container-fluid">
    <div class="row">

        @foreach($dataProduk as $produk)
        <div class="col-lg-3">
            <div class="cards pt-2 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $produk->thumbnail ) }}" class="card-img-top" alt="Produk pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produk->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $produk->description }}.</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $produk->price }} /kg</p>
                        <p class="card-text fw-bold text-success">Tersedia - {{ $produk->amount }} Ton</p>
                        <a href="/ulasan/{{ $produk->id }}" class="btn btn-secondary float-end">Ulasan</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



@endsection