<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <h5 class="text-success fw-bold"><b class="text-white">Pengawas</b> adasemua.id</h5>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
      <li class="nav-item"><a class="nav-link" href="/">
          <svg class="nav-icon">
            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
          </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
        </li>
        {{-- // --}}
      <li class="nav-title">Components</li>

      {{-- <li class="nav-group">
          <a class="nav-link nav-group-toggle disabled" href="#" aria-disabled="true">
          <svg class="nav-icon">
            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
          </svg> Akses</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> User Managements</a></li>
          <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Role Management</a></li>
        </ul>
      </li> --}}

      <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-cursor"></use>
          </svg>
          Master
        </a>
        <ul class="nav-group-items">
          {{-- <li class="nav-item"><a class="nav-link disabled" href="buttons/buttons.html" aria-disabled="true"><span class="nav-icon"></span> Banner</a></li>
          <li class="nav-item"><a class="nav-link disabled" href="buttons/button-group.html" aria-disabled="true"><span class="nav-icon"></span> Kategori</a></li> --}}
          <li class="nav-item">
              <a class="nav-link {{ request()->is('penyedia') ? 'active' : '' }}" href="penyedia">
                <span class="nav-icon"></span>Penyedia</a>
            </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="product">
            <span class="nav-icon">
                </span>
                Produk
            </a>
        </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->is('satdik') ? 'active' : '' }}" href="satdik">
            <span class="nav-icon">
                </span>
                Satdik
            </a>
        </li>
          {{-- <li class="nav-item"><a class="nav-link disabled" href="buttons/dropdowns.html" aria-disabled="true"><span class="nav-icon"></span>Buku Teks</a></li>
          <li class="nav-item"><a class="nav-link disabled" href="buttons/dropdowns.html" aria-disabled="true"><span class="nav-icon"></span>Buku Non Teks</a></li> --}}
        </ul>
      </li>

      {{-- <li class="nav-item">
          <a class="nav-link disabled" href="charts.html" aria-disabled="true">
              <svg class="nav-icon">
                  <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                </svg>
                Negosiasi
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link disabled" href="#" aria-disabled="true">
                <svg class="nav-icon">
                    <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-notes"></use>
                </svg> Daftar Pesanan</a>
            </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="charts.html" aria-disabled="true">
                        <svg class="nav-icon">
                            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-bell"></use>
                        </svg> Daftar Pesanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="widgets.html" aria-disabled="true">
                            <svg class="nav-icon">
                            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-calculator"></use>
                        </svg> Chats<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
                    </li> --}}
                </ul>
  </div>
