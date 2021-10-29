@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
            @include('frontEnd.dashboard.addPengguna')
            @include('frontEnd.dashboard.addPenyedia')
            @include('frontEnd.dashboard.addProduk')
            @include('frontEnd.dashboard.addPesanan')
            @include('frontEnd.dashboard.addKomplain')
            @include('frontEnd.dashboard.addKom_Pay_Pesanan')
            @include('frontEnd.dashboard.addkategori')
            @include('frontEnd.dashboard.addSatdik')
            </div>
        </div>
    </div>
</div>
<!-- /.card.mb-4-->
    </div>
@endSection
