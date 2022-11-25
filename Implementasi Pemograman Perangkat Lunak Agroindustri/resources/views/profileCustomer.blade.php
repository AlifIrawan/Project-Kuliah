@extends('layouts.main')

@section('container')


<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5 px-4">Profile Customer</h5>
            <form action="/profileCustomer/edit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <img src="{{ asset('storage/'. $dataCustomer->image ) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="300" height="300" alt="Profile Picture">
                    <input type="file" name="image" class="form-control mb-4" id="image">
                    <input type="hidden" name="oldimage" value="{{ $dataCustomer->image }}">
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="name" class="form-label">Nama : </label>
                    <input class="form-control" value="{{ $dataCustomer->name }}" name="name" type="text" autofocus required>
                    <input type="hidden" name="id" value="{{ $dataCustomer->id }}">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input class="form-control" name="email" value="{{ $dataCustomer->email }}" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="username" class="form-label">username : </label>
                    <input class="form-control" name="username" value="{{ $dataCustomer->username }}" type="text" required>
                </div>

                <button type="submit" name="button" class="btn btn-success">Update data</button>
            </form>
        </div>
    </div>
</div>

@endsection