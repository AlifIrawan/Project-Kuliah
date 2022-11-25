@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Bukti Transaksi Produk</h5>

            <div class="col-lg-12">
                <img src="{{ asset('storage/'. $dataPembayaran->image) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="500" height="500" alt="Belum ada Transaksi">
            </div>

        </div>
    </div>
</div>



@endsection