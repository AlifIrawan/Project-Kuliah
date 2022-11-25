@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Upload bukti pembayaran produk</h5>
            <form action="/buktiPembayaran/update?id={{ $dataCustomer->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <label for="image" class="form-label">Bukti Pembayaran : </label>
                    <input type="file" name="image" class="form-control mb-4" id="image">
                    <input type="hidden" name="customer_id" value="{{ $dataCustomer->id }}" class="form-control mb-4">
                </div>

                <button type="submit" name="button" class="btn btn-success ml-3">Simpan Transaksi</button>
            </form>


        </div>
    </div>
</div>


@endsection