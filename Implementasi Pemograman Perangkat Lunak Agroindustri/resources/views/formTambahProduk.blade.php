@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-3">Form Tambah Produk</h5>
            <form action="/produk/tambahProduk" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 mb-3">
                    <label for="thumbnail" class="form-label">Foto Produk : </label>
                    <input type="file" name="thumbnail" class="form-control mb-4" id="thumbnail">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="title" class="form-label">Nama Produk : </label>
                    <input class="form-control" name="title" type="text" autofocus required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Harga : </label>
                    <input class="form-control" name="price" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Jumlah/Ton : </label>
                    <input class="form-control" name="amount" type="number" value="1" min="1" max="">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Description" class="form-label">Description : </label>
                    <textarea class="form-control" required name="description" id="Description" cols="20" rows="10"></textarea>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Pilih Menu : </label>
                    <select class="form-select" name="recommendation" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Rekomendasi</option>
                    </select>
                </div>

                <button type="submit" name="button" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>


@endsection