@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-3">Form Tambah Pengeluaran</h5>
            <form action="/pengeluaran/tambahPengeluaran" method="post">
                @csrf
                <div class="col-lg-12 mb-3">
                    <label for="name" class="form-label">Nama Pengeluaran : </label>
                    <input class="form-control" name="name" type="text" autofocus required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="total" class="form-label">Total : </label>
                    <input class="form-control" name="total" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="date" class="form-label">Tanggal Pengeluaran : </label>
                    <input class="form-control" name="date" type="text" required>
                </div>

                <button type="submit" name="button" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>


@endsection