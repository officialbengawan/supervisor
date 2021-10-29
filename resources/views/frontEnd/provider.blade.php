@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="row justify-content-center">
        <div class="col col-lg col-sm">
            @include('frontEnd.provider.addProvider')
        </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
@endsection
