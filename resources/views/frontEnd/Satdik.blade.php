@extends('frontEnd.layouts.main')

@section('container')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
      <div class="row justify-content-center">
        <div class="col col-lg col-sm">
            <table id="example" class="table table-striped" style="width:100%">
                <!-- Example single danger button -->
              <div class="row justify-content-center mb-3">
                  <div class="col-3 col-lg col-sm">
                      <div class="dropdown">
                          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Semua Status
                          </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-center" href="#">Aktif</a></li>
                            <li><a class="dropdown-item text-center" href="#">DiTangguhhkan</a></li>
                    </ul>
                    </div>
                    </div>
                    <div class="col col-lg col-s">
                         <div class="dropdown">
                          <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Semua Aktifitas
                          </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-center" href="#"><i class="bi bi-vinyl-fill btn-success"></i>&nbsp;Online</a></li>
                        <li><a class="dropdown-item  text-center" href="#"><i class="bi bi-record-circle btn-danger"></i>&nbsp;Offline</a></li>
                    </ul>
                    </div>
                    </div>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Tipe</th>
                        <th>Jabatan</th>
                        <th>Sekolah</th>
                        <th>Aktivitas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p id="name">
                                SABIHIN
                            </p>
                        </td>
                        <td>
                            <p id="">
                                sabihin1962@gmail.com
                            </p>
                        </td>
                        <td>
                            <p id="">
                                PTK
                            </p>
                        </td>
                        <td>
                           <p id="">
                               Guru Mapel
                           </p>
                        </td>
                        <td>
                          <p id="">
                               PLT Kepala Sekolah
                          </p>
                        </td>
                        <td>
                          <p id="">
                              SDN 16 Bekut
                          </p>
                        </td>
                        <td>
                           <b id="" class="badge bg-success text-wrap " style="width: 6rem;"><i class="bi bi-vinyl-fill"></i>&nbsp; Online</b>
                            <b id="" class="badge bg-secondary text-wrap" style="width: 6rem;"><i class="bi bi-record-circle"></i>&nbsp;Offline</b>
                        </td>
                        <td>
                            <p id="">
                                N/A
                            </p>
                        </td>
                        <td>
                            <button id="" style="background-color: blue"><i class="bi bi-eye-fill text-white"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
      <!-- /.row-->
    </div>
  </div>
@endsection
