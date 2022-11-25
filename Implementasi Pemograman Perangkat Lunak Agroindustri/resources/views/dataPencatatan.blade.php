@extends('layouts.mainMitra')

@section('container')

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h1 class="fw-bold fs-3 pl-4 pt-5"><i class="fa-solid fa-cube"></i></i> Data Pencacatan</h1>

    <table class="table table-hover" id="mytable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Orderan</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody id="content">
            @foreach($dataPencatatan as $pencatatan)
            <tr>
                <th scope="row">{{ $pencatatan->pemesanan->id }}</th>
                <td>{{ $pencatatan->title }}</td>
                <td>{{ $pencatatan->price }}</td>
                <td>{{ $pencatatan->amount }}</td>
                <td>{{ $pencatatan->pemesanan->order_date }}</td>
                <td>{{ ($pencatatan->pemesanan->status == 1) ? 'Disetujui' : "Tidak Disetujui" }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection