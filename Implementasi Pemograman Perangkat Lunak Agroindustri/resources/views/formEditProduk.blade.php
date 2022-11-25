@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Form Update Produk</h5>
            <form action="/produk/editProduk/{{ $detailProduk->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <img src="{{ asset('storage/'. $detailProduk->thumbnail ) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="500" height="500" alt="Profile Picture">
                    <input type="file" name="thumbnail" class="form-control mb-4" id="thumbnail">
                    <input type="hidden" name="oldThumbnail" value="{{ $detailProduk->thumbnail }}">
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="title" class="form-label">Nama Produk : </label>
                    <input class="form-control" value="{{ $detailProduk->title }}" name="title" type="text" autofocus required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Harga : </label>
                    <input class="form-control" name="price" value="{{ $detailProduk->price }}" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Jumlah/Kg : </label>
                    <input class="form-control" name="amount" value="{{ $detailProduk->amount }}" type="number" value="1" min="1" max="">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Description" class="form-label">Description : </label>
                    <textarea class="form-control" required name="description" id="Description" cols="20" rows="10">{{ $detailProduk->description }}</textarea>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="Price" class="form-label">Pilih Rekomendasi : </label>
                    <select class="form-select" name="recommendation" aria-label="Default select example">
                        <option></option>
                        <option value="1" {{ ($detailProduk->recommendation == 1) ? 'selected' : '' }}>Rekomendasi</option>
                        <option value="0" {{ ($detailProduk->recommendation == 0) ? 'selected' : '' }}>Tidak Rekomendasi</option>
                    </select>
                </div>


                <button type="submit" name="button" class="btn btn-success">Update data</button>
            </form>
        </div>
    </div>
</div>
@endsection