@extends('layouts.mainMitra')

@section('container')

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 class="fw-bold fs-3 pl-4 pt-5"><i class="fa-solid fa-cube"></i></i> Data Produk</h1>
    <a href="/produk/tambahProduk" class="btn btn-success my-3">Tambah Produk</a>
    <table class="table table-hover" id="mytable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach($dataProduk as $produk)
            <tr>
                <th scope="row">{{ $produk->id }}</th>
                <td>{{ $produk->title }}</td>
                <td>{{ $produk->price }}</td>
                <td>{{ $produk->amount }}</td>
                <td>{{ $produk->description }}</td>
                <td>
                    <a href="/produk/editProduk/{{ $produk->id }}" class="btn btn-success my-1">Edit</a>
                    <form action="/produk/{{ $produk->id }}" method="post">
                        @csrf
                        <button class="btn btn-danger my-1" onclick="return confirm('Data produk akan dihapus dari database, Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection