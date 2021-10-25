@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col col-lg col-sm">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tipe Bisnis</th>
                        <th>Aktifitas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>FUTO INDONESIA</td>
                        <td>123@gmail.com</td>
                        <td>Badan Usaha (PT/CV)</td>
                        <td>
                            <b  class="badge bg-success text-wrap" style="width: 6rem;">Online</b>
                            <b  class="badge bg-secondary text-wrap" style="width: 6rem;">Offline</b>
                        </td>
                        <td>
                            <b class="badge bg-danger text-wrap" style="width: 6rem;">Ditolak</b>
                            <b class="badge bg-success text-wrap" style="width: 6rem;">Aktif</b>
                        </td>
                        <td>
                            <button style="background-color: #04CB2F"><i class="bi bi-eye-fill text-white"></i></button>
                            <button style="background-color: black"><i class="bi bi-person-x-fill text-white"></i></button>
                            <button style="background-color: hsl(256, 100%, 48%)"><i class="bi bi-x-octagon-fill text-white"></i></button>
                            <button style="background-color: hsl(0, 100%, 50%)"><i class="bi bi-check-circle-fill text-white"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>FUTO INDONESIA</td>
                        <td>123@gmail.com</td>
                        <td>Badan Usaha (PT/CV)</td>
                        <td>
                            <b  class="badge bg-success text-wrap" style="width: 6rem;">Online</b>
                            <b  class="badge bg-secondary text-wrap" style="width: 6rem;">Offline</b>
                        </td>
                        <td>
                            <b class="badge bg-danger text-wrap" style="width: 6rem;">Ditolak</b>
                            <b class="badge bg-success text-wrap" style="width: 6rem;">Aktif</b>
                        </td>
                        <td>
                            <button style="background-color: #04CB2F"><i class="bi bi-eye-fill text-white"></i></button>
                            <button style="background-color: black"><i class="bi bi-person-x-fill text-white"></i></button>
                            <button style="background-color: hsl(256, 100%, 48%)"><i class="bi bi-x-octagon-fill text-white"></i></button>
                            <button style="background-color: hsl(0, 100%, 50%)"><i class="bi bi-check-circle-fill text-white"></i></button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tipe Bisnis</th>
                        <th>Aktifitas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
@endsection
