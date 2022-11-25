@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Detail Ulasan Produk</h5>
            <div class="row">

                @foreach($dataUlasan as $Ulasan)
                <!-- New Ulasan -->
                <div class="col-lg-1 mt-4">
                    <img class="border border-success rounded-circle" src="{{ asset('storage/'. $dataImage->image ) }}" alt="foto mitra" rounded-circle width="50">
                </div>
                <div class="col-lg-10 mt-4 text-disable bg-light">
                    <b>{{ $Ulasan->name }}</b>
                    <p>{{ $Ulasan->feedback }}</p>
                </div>
                <div class="col-lg-1">
                    <form action="/ulasan/{{ $Ulasan->id }}" method="post">
                        @csrf
                        <button class="btn btn-danger mt-4" onclick="return confirm('Data ulasan akan dihapus dari database, Apakah anda yakin?')">Delete</button>
                    </form>
                </div>
                @endforeach

            </div>

            <div class="spacer" style="height: 120px;"></div>
        </div>
    </div>
</div>


@endsection