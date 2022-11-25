@extends('layouts.main')


@section('container')

@if(session()->has('message'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{ session('message') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif



<!-- CARD PESANAN -->
<p class="fw-bold fs-3 pl-4"><i class="fa-solid fa-cart-shopping"></i> Keranjang anda</p>
<a href="/buktiPembayaran?id={{ $dataCustomer->id }}" class="btn btn-secondary ml-3">Bukti Pembayaran</a>
<p class="fw-bold fst-italic fs-4 text-secondary pt-2 pl-3">Total : Rp. {{ $totalHarga }}-,</p>
<div class="container-fluid">
    <div class="row">

        @foreach($dataPesanan as $pesanan)
        <div class="col-lg-3">
            <div class="cards pt-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $pesanan->thumbnail ) }}" class="card-img-top" alt="pesanan pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pesanan->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $pesanan->description }}.</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $pesanan->price }} /kg</p>
                        <p class="card-text fw-bold">Status Produk :
                        <p class="{{ ($pesanan->status == 1) ? 'text-success' : 'text-danger'  }}">{{ ($pesanan->status === "1") ? 'Disetujui' : 'Tidak Disetujui'  }}</p>
                        </p>
                        <p class="card-text text-secondary fst-italic">Tanggal pemesanan : {{ $pesanan->order_date }}</p>
                        <p class="card-text text-success fw-bold fst-italic">Jumlah Pemesanan : {{ $pesanan->amount }}</p>


                        <a href="/deletePemesanan/{{ $pesanan->id }}?id={{ $dataCustomer->id }}" class="btn btn-outline-danger float-end">Batal</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="spacer" style="height: 30px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 offset-10">
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#metodePembayaran">Bayar Sekarang</button>
                </div>
            </div>
        </div>








        <!-- MODAL METODE PEMBAYARAN-->
        <div class="modal fade" id="metodePembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Menu pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="d-grid gap-2 pt-1">
                                <a class="btn btn-outline-primary rounded fs-5" data-bs-toggle="collapse" href="#BCA" role="button" aria-expanded="false" aria-controls="BCA"><i class="fa-solid fa-building-columns"></i></i> BCA</a>
                                <div class="collapse" id="BCA">
                                    <div class="card card-body">
                                        1. Buka BCA MOBILE di hp anda <br>
                                        2. Klik tombol bertulis Transfer <br>
                                        3. Klik tombol bertulis Tambah Daftar Baru <br>
                                        4. Masukkan Bank Tujuan BCA <br>
                                        5. Tulis pada kolom alias @namaMitra <br>
                                        6. Masukkan Nominal Transfer sesuai dengan Total yang ada pada website <br>
                                        7. Pilih Sumber Dana <br>
                                        8. Lalu klik Transfer
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 pt-3">
                                <a href="#" class="btn btn-outline-primary rounded fs-5" data-bs-toggle="collapse" data-bs-target="#BRI" aria-expanded="false" aria-controls="BRI"><i class="fa-solid fa-building-columns"></i> BRI</a>
                                <div class="collapse" id="BRI">
                                    <div class="card card-body">
                                        1. Buka BRI MOBILE di hp anda <br>
                                        2. Klik tombol bertulis Transfer <br>
                                        3. Klik tombol bertulis Tambah Daftar Baru <br>
                                        4. Masukkan Bank Tujuan BRI <br>
                                        5. Tulis pada kolom alias @namaMitra <br>
                                        6. Masukkan Nominal Transfer sesuai dengan Total yang ada pada website <br>
                                        7. Pilih Sumber Dana <br>
                                        8. Lalu klik Transfer
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 pt-3">
                                <a href="#" class="btn btn-outline-primary rounded fs-5" data-bs-toggle="collapse" data-bs-target="#BNI" aria-expanded="false" aria-controls="BNI"><i class="fa-solid fa-building-columns"></i> BNI</a>
                                <div class="collapse" id="BNI">
                                    <div class="card card-body">
                                        1. Buka BNI MOBILE di hp anda <br>
                                        2. Klik tombol bertulis Transfer <br>
                                        3. Klik tombol bertulis Tambah Daftar Baru <br>
                                        4. Masukkan Bank Tujuan BNI <br>
                                        5. Tulis pada kolom alias @namaMitra <br>
                                        6. Masukkan Nominal Transfer sesuai dengan Total yang ada pada website <br>
                                        7. Pilih Sumber Dana <br>
                                        8. Lalu klik Transfer
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 pt-3">
                                <a href="#" class="btn btn-outline-primary rounded fs-5" data-bs-toggle="collapse" data-bs-target="#MANDIRI" aria-expanded="false" aria-controls="MANDIRI"><i class="fa-solid fa-building-columns"></i> MANDIRI</a>
                                <div class="collapse" id="MANDIRI">
                                    <div class="card card-body">
                                        1. Buka MANDIRI MOBILE di hp anda <br>
                                        2. Klik tombol bertulis Transfer <br>
                                        3. Klik tombol bertulis Tambah Daftar Baru <br>
                                        4. Masukkan Bank Tujuan MANDIRI <br>
                                        5. Tulis pada kolom alias @namaMitra <br>
                                        6. Masukkan Nominal Transfer sesuai dengan Total yang ada pada website <br>
                                        7. Pilih Sumber Dana <br>
                                        8. Lalu klik Transfer
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 pt-5">
                                <a href="https://chat.whatsapp.com/Dx15Tpo5OnvBeWyLJtwxlP" class="btn btn-outline-success rounded fs-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-brands fa-whatsapp"></i> Pilih Cara Lain</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection