@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Halaman Detail Produk</h5>
            <div class="col-lg-12">
                <img src="{{ asset('storage/'. $detailProduk->thumbnail ) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="500" height="500" alt="Profile Picture">
            </div>

            <div class="col-lg-12 mb-3">
                <label for="title" class="form-label">Nama Produk : </label>
                <input class="form-control" type="text" value="{{ $detailProduk->title }}" aria-label="readonly input example" readonly>
            </div>
            <div class="col-lg-12 mb-3">
                <label for="Price" class="form-label">Harga : </label>
                <input class="form-control" type="text" value="{{ $detailProduk->price }}" aria-label="readonly input example" readonly>
            </div>
            <div class="col-lg-12 mb-3">
                <label for="Description" class="form-label">Description : </label>
                <textarea class="form-control" aria-label="readonly input example" readonly name="Description" id="Description" cols="20" rows="10">{{ $detailProduk->description }}</textarea>
            </div>
            <div class="col-lg-12 mb-3">
                <label for="amount" class="form-label">Jumlah/Ton : </label>
                <input class="form-control" type="text" value="{{ $detailProduk->amount }}" aria-label="readonly input example" readonly>
            </div>

            <!-- <a href="/pesanan/{{ $dataCustomer->id }}?id={{ $dataCustomer->id }}" type="button" class="btn btn-success">Checkout</a> -->
            <a href="/storePemesanan/{{ $detailProduk->id }}?id={{ $dataCustomer->id }}" type="button" class="btn btn-success">Checkout</a>
        </div>
    </div>
</div>
@endsection