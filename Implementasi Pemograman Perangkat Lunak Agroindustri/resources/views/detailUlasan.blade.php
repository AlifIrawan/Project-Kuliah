@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Detail Ulasan Produk</h5>
            <div class="row">

                <!-- Tambah Ulasan -->
                <div class="col-lg-12 mb-4">
                    <a href="/tambahUlasan/{{ $produkId->id }}?id={{ $dataCustomer->id }}" type="button" class="btn btn-success">Tambah</a>
                </div>

                @foreach($dataUlasan as $Ulasan)
                <!-- New Ulasan -->
                <div class="col-lg-1 mt-4">
                    <img class="border border-success rounded-circle" src="{{ asset('storage/'. $dataCustomer->image ) }}" alt="foto mitra" rounded-circle width="50">
                </div>
                <div class="col-lg-10 mt-4 text-disable bg-light">
                    <b>{{ $Ulasan->name }}</b>
                    <p>{{ $Ulasan->feedback }}</p>
                </div>
                <div class="col-lg-1"></div>
                @endforeach

            </div>

            <div class="spacer" style="height: 120px;"></div>
            <a href="/dashboard_customer/{{ $dataCustomer->id }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>


@endsection