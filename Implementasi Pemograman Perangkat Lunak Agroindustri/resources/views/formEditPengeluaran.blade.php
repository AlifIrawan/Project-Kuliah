@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-3">Form Edit Pengeluaran</h5>
            <form action="/pengeluaran/editPengeluaran/{{ $detailPengeluaran->id }}" method="post">
                @csrf
                <div class="col-lg-12 mb-3">
                    <label for="name" class="form-label">Nama Pengeluaran : </label>
                    <input class="form-control" value="{{ $detailPengeluaran->name }}" name="name" type="text" autofocus required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="total" class="form-label">Total : </label>
                    <input class="form-control" value="{{ $detailPengeluaran->total }}" name="total" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="date" class="form-label">Tanggal Pengeluaran : </label>
                    <input class="form-control" value="{{ $detailPengeluaran->date }}" name="date" type="text" required>
                </div>

                <button type="submit" name="button" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection