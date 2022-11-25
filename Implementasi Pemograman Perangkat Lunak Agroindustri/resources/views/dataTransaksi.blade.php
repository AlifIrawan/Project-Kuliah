@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Form Transaksi Produk</h5>
            <form action="/transaksi/{{ $detailProduk->id }}" method="post">
                @csrf
                <div class="col-lg-12">
                    <img src="{{ asset('storage/'. $detailProduk->thumbnail ) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="500" height="500" alt="Profile Picture">
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="title" class="form-label">Nama Produk : </label>
                    <input class="form-control" value="{{ $detailProduk->title }}" name="title" type="text" autofocus required required aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Harga : </label>
                    <input class="form-control" name="price" value="{{ $detailProduk->price }}" type="text" required required aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Jumlah/Kg : </label>
                    <input class="form-control" name="amount" value="{{ $detailProduk->amount }}" type="number" value="1" min="1" max="" required aria-label="readonly input example" readonly>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Pilih Menu Transaksi : </label>
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option selected>Silahkan Pilih Menu</option>
                        <option value="1">Disetujui</option>
                        <option value="0">Tidak Disetujui</option>
                    </select>
                </div>


                <button type="submit" name="button" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection