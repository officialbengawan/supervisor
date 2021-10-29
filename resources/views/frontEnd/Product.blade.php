@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row justify-content-center">
       @include('frontEnd.product.addProduct')
      </div>
      <!-- /.row-->
    </div>
  </div>
@endsection
