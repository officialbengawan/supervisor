@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3">
            @include('frontEnd.layouts.addPengguna')
            @include('frontEnd.layouts.addPenyedia')
            @include('frontEnd.layouts.addProduk')
            @include('frontEnd.layouts.addPesanan')
            @include('frontEnd.layouts.addKomplain')
            @include('frontEnd.layouts.addKom_Pay_Pesanan')
            @include('frontEnd.layouts.addkategori')
            @include('frontEnd.layouts.addSatdik')
            </div>
        </div>
    </div>
</div>
<!-- /.card.mb-4-->
    </div>
@endSection
