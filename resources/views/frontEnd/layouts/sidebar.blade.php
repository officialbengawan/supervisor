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
          <a class="nav-link nav-group-toggle">
          <svg class="nav-icon">
            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-puzzle">
            </use>
          </svg>
          Akses
        </a> --}}

        {{-- <ul class="nav-group-items">
          <li class="nav-item">
              <a class="nav-link {{ request()->is('user_management') ? 'active' : '' }}" href="user_management">
            <span class="nav-icon">
              </span>
             User Managements
        </a>
        </li> --}}

          {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('role_management') ? 'active' : '' }}" href="role_management">
            <span class="nav-icon">
              </span>
            Role Management
        </a>
        </li>
        </ul>
      </li> --}}

      {{-- <li class="nav-group">
          <a class="nav-link nav-group-toggle">
          <svg class="nav-icon">
            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-puzzle">
            </use>
          </svg>
          Mitra
        </a> --}}

        {{-- <ul class="nav-group-items">
          <li class="nav-item">
              <a class="nav-link {{ request()->is('pembayaran') ? 'active' : '' }}" href="pembayaran">
            <span class="nav-icon">
              </span>
            Pembayaran
        </a>
        </li> --}}

        {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('pengiriman') ? 'active' : '' }}" href="pengiriman">
            <span class="nav-icon">
              </span>
            Pengiriman
        </a>
        </li>
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
          {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('banner') ? 'active' : '' }}" href="banner">
                <span class="nav-icon">
                    </span>
                     Banner
                    </a>
                </li> --}}

          {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('category') ? 'active' : '' }}" href="category>
            <span class="nav-icon">
              </span>
            Kategori
        </a>
        </li> --}}

          <li class="nav-item">
              <a class="nav-link {{ request()->is('provider') ? 'active' : '' }}" href="provider">
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

          {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('book_teks') ? 'active' : '' }}" href="book_teks">
            <span class="nav-icon">
                </span>
            Buku Teks
        </a>
        </li> --}}

          {{-- <li class="nav-item">
              <a class="nav-link {{ request()->is('book_non_teks') ? 'active' : '' }}" href="book_non_teks">
            <span class="nav-icon">
                </span>
            Buku Non Teks
        </a>
        </li> --}}

        </ul>
      </li>

      {{-- <li class="nav-item">
          <a class="nav-link {{ request()->is('negotiation') ? 'active' : '' }}" href="negotiation">
              <svg class="nav-icon">
                  <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                </svg>
                Negosiasi
            </a>
        </li> --}}

        {{-- <li class="nav-item">
            <a class="nav-link {{ request()->is('order_list') ? 'active' : '' }}" href="order_list">
                <svg class="nav-icon">
                    <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-notes"></use>
                </svg> Daftar Pesanan</a>
            </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('activity_history') ? 'active' : '' }}" href="activity_history">
                        <svg class="nav-icon">
                            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-bell"></use>
                        </svg>History Aktivitas</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->is('chats') ? 'active' : '' }}" href="chats">
                            <svg class="nav-icon">
                            <use xlink:href="assets/@coreui/icons/sprites/free.svg#cil-calculator"></use>
                        </svg> Chats<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
                    </li> --}}

                </ul>
  </div>
