<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div
      class="sidebar-content"
      data-simplebar
      style="height: 100%; max-height: 100%"
    >
      <div class="sidebar-brand">
        <a href="index.html">
          <img
            src="assets/images/logo-dark.png"
            height="24"
            class="logo-light-mode"
            alt=""
          />
          <img
            src="assets/images/logo-light.png"
            height="24"
            class="logo-dark-mode"
            alt=""
          />
          <span class="sidebar-colored">
            <h1 style="font-size: 2rem">KMS Unsika</h1>
            <!-- <img src="assets/images/logo-light.png" height="24" alt="" /> -->
          </span>
        </a>
      </div>

      <ul class="sidebar-menu">
        <li class="sidebar">
            <!-- <span class="sidebar-colored"> -->
            <span
              style="
                color: rgba(248, 249, 250, 0.5);
                padding: 0px 24px 0px 20px;
              "
            >
              Main menu
            </span>
            <!-- <img src="assets/images/logo-light.png" height="24" alt="" /> -->

            <a href="{{ route('dashboard') }}"><i class="ti ti-home me-2"></i> Dashboard</a>
            <!-- </span> -->
        </li>
      </ul>
      <ul class="sidebar-menu">
          <li class="sidebar">
            <span
              style="
                color: rgba(248, 249, 250, 0.5);
                padding: 0px 24px 0px 20px;
              "
            >
              Master Data
            </span>
            <a href="{{ route('fakultas') }}"
              ><i class="ti ti-browser me-2"></i>Data Fakultas</a
            >
          </li>
          <li class="sidebar">
            <a href="{{ route('program-studi') }}"
              ><i class="ti ti-apps me-2"></i>Data Program Studi</a
            >
          </li>
          <li class="sidebar">
            <a href="{{ route('bidang-ilmu') }}"
              ><i class="ti ti-license me-2"></i>Data Bidang Ilmu</a
            >
          </li>
          <li class="sidebar-dropdown">
            <a href="javascript:void(0)"
              ><i class="ti ti-user me-2"></i>Data User</a
            >
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('kepala-prodi') }}">Data Kepala Program Studi</a>
                </li>
                <li>
                  <a href="{{ route('admin-prodi') }}">Data Admin Program Studi</a>
                </li>
                <li><a href="{{ route('dosen') }}">Data Dosen</a></li>
                <li><a href="{{ route('mahasiswa') }}">Data Mahasiswa</a></li>
              </ul>
            </div>
          </li>
      </ul>
      <!-- sidebar-menu  -->
    </div>
  </nav>