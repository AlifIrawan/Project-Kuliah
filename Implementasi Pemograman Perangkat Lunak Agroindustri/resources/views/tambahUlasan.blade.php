@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-3">Tambah ulasan</h5>
            <div class="row">
                <form action="/storeUlasan/{{ $produkId->id }}?id={{ $dataCustomer->id }}" method="post">
                    <div class="mb-3">
                        @csrf
                        <input class="form-control" name="name" type="text" value="{{ $dataCustomer->name }}" aria-label="readonly input example" readonly>
                        <input type="hidden" name="customer_id" value="{{ $dataCustomer->id }}">
                        <input type="hidden" name="product_id" value="{{ $produkId->id }}">
                        <label for=" ulasan" class="col-form-label">Ulasan: </label>
                        <textarea name="feedback" required autofocus id="ulasan" class="form-control" cols="20" rows="10"></textarea>

                        <button class="btn btn-success mt-4 float-end">Tambah</button>
                    </div>
                </form>

            </div>

            <div class="spacer" style="height: 100px;"></div>
            <a href="/detailUlasan/{{ $produkId->id }}?id={{ $dataCustomer->id }}" class="btn btn-secondary">Tutup</a>
        </div>
    </div>
</div>



@endsection