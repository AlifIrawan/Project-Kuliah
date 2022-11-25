@extends('layouts.mainMitra')

@section('container')


<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5 px-4">Profile Mitra</h5>
            <form action="/profileMitra/edit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <img src="{{ asset('storage/'. auth()->user()->image ) }} " class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="300" height="300" alt="Profile Picture">
                    <input type="file" name="image" class="form-control mb-4" id="image">
                    <input type="hidden" name="oldimage" value="{{ auth()->user()->image }}">
                </div>

                <div class="col-lg-12 mb-3">
                    <label for="name" class="form-label">Nama : </label>
                    <input class="form-control" value="{{ auth()->user()->name }}" name="name" type="text" autofocus required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="number" class="form-label">No HP : </label>
                    <input class="form-control" name="number" value="{{ auth()->user()->number }}" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input class="form-control" name="email" value="{{ auth()->user()->email }}" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="address" class="form-label">Alamat : </label>
                    <textarea class="form-control" required name="address" id="address" cols="20" rows="10">{{ auth()->user()->address }}</textarea>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="username" class="form-label">username : </label>
                    <input class="form-control" name="username" value="{{ auth()->user()->username }}" type="text" required>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="affiliate" class="form-label">Bergabung : </label>
                    <input class="form-control" name="affiliate" value="{{ auth()->user()->affiliate }}" type="text" required aria-label="readonly input example" readonly>
                </div>

                <button type="submit" name="button" class="btn btn-success">Update data</button>
            </form>
        </div>
    </div>
</div>

@endsection