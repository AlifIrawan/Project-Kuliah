@extends('layouts.mainMitra')

@section('container')

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 class="fw-bold fs-3 pl-4 pt-5"><i class="fa-solid fa-cube"></i></i> Data Pengeluaran</h1>
    <a href="/pengeluaran/tambahPengeluaran" class="btn btn-success my-3">Tambah Pengeluaran</a>
    <table class="table table-hover" id="mytable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pengeluaran</th>
                <th scope="col">Total</th>
                <th scope="col">Tanggal Pengeluaran</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach($dataPengeluaran as $pengeluaran)
            <tr>
                <th scope="row">{{ $pengeluaran->id }}</th>
                <td>{{ $pengeluaran->name }}</td>
                <td>{{ $pengeluaran->total }}</td>
                <td>{{ $pengeluaran->date }}</td>
                <td>
                    <a href="/pengeluaran/editPengeluaran/{{ $pengeluaran->id }}" class="btn btn-success my-1">Edit</a>
                    <form action="/pengeluaran/{{ $pengeluaran->id }}" method="post">
                        @csrf
                        <button class="btn btn-danger my-1" onclick="return confirm('Data Pengeluaran akan dihapus dari database, Apakah anda yakin?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection