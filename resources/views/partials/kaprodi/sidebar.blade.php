<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div
      class="sidebar-content"
      data-simplebar
      style="height: 100%; max-height: 100%"
    >
      <div class="sidebar-brand">
        <a href="index.html">
          <img
            src="{{ url("assets/images/logo-dark.png") }}"
            height="24"
            class="logo-light-mode"
            alt=""
          />
          <img
            src="{{ url('assets/images/logo-light.png') }}"
            height="24"
            class="logo-dark-mode"
            alt=""
          />
          <span class="sidebar-colored">
            <h1 style="font-size: 2rem">KMS Unsika</h1>
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

            <a href="{{ route('kaprodi-dashboard') }}"><i class="ti ti-home me-2"></i> Dashboard</a>
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
            <a href="{{ route('kaprodi_kurikulum') }}"
              ><i class="ti ti-browser me-2"></i>Kurikulum</a
            >
          </li>
          <li class="sidebar">
            <a href="{{ route('kaprodi_mata-kuliah') }}"
              ><i class="ti ti-apps me-2"></i>Mata Kuliah</a
            >
          </li>
          <li class="sidebar">
            <a href="{{ route('kaprodi_tahun-ajaran') }}"
              ><i class="ti ti-license me-2"></i>Tahun Ajaran</a
            >
          </li>
      </ul>
      <!-- sidebar-menu  -->
    </div>
  </nav>
