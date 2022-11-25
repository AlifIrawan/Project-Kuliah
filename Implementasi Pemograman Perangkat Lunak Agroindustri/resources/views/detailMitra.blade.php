@extends('layouts.main')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <!-- Isian Detail -->
            <h5 class="fw-bold pb-5">Profile Mitra</h5>
            <img class="border border-light rounded-circle mx-auto d-block shadow" src="{{ asset('storage/'. $detailMitra->image ) }}" alt="foto mitra" rounded-circle width="150">
            <h3 class="text-center mt-3 montserrat">Mitra Terdaftar</h3>
            <div class="text-disable text-center fs-6 fw-light">Bergabung sejak tahun <small class="text-success fw-bold fst-italic fs-6">{{ $detailMitra->affiliate }}</small>
            </div>
            <div class="row mb-3 mt-5">
                <label for="Nama" class="col-sm-2 col-form-label">Nama* </label>
                <div class="col-sm-10">
                    <input for="Nama" class="form-control" type="text" value="{{ $detailMitra->name }}" aria-label="readonly input example" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomor" class="col-sm-2 col-form-label">No Telp* </label>
                <div class="col-sm-10">
                    <input for="nomor" class="form-control" type="text" value="{{ $detailMitra->number }}" aria-label="readonly input example" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat* </label>
                <div class="col-sm-10">
                    <textarea class="form-control" aria-label="readonly input example" readonly name="alamat" id="Description" cols="20" rows="10">{{ $detailMitra->address }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Email" class="col-sm-2 col-form-label">Email* </label>
                <div class="col-sm-10">
                    <input for="Email" class="form-control" type="text" value="{{ $detailMitra->email }}" aria-label="readonly input example" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Username" class="col-sm-2 col-form-label">Username* </label>
                <div class="col-sm-10">
                    <input for="Username" class="form-control" type="text" value="{{ $detailMitra->username }}" aria-label="readonly input example" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/dashboard_customer/{{ $dataCustomer->id }}" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
            </div>
            <!-- End Detail -->
        </div>
    </div>
</div>
@endsection