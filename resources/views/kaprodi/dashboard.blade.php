@extends('layouts.main')
@section('container')
<body>
  <!-- Loader -->
  <!-- <div id="preloader">
          <div id="status">
              <div class="spinner">
                  <div class="double-bounce1"></div>
                  <div class="double-bounce2"></div>
              </div>
          </div>
      </div> -->
  <!-- Loader -->

  <div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    @include('partials.kaprodi.sidebar')
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
      <!-- Top Header -->
      @include('partials.kaprodi.header')
      <!-- Top Header -->

      <div class="container-fluid">
        <div class="layout-specing">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="text-muted mb-1">Welcome back, Cristina!</h6>
              <h5 class="mb-0">Dashboard</h5>
            </div>

            <div class="mb-0 position-relative">
              <select class="form-select form-control" id="dailychart">
                <option selected="">This Month</option>
                <option value="aug">August</option>
                <option value="jul">July</option>
                <option value="jun">June</option>
              </select>
            </div>
          </div>

          <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
            <div class="col mt-4">
              <a
                href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3"
              >
                <div class="d-flex align-items-center">
                  <div class="icon text-center rounded-pill">
                    <i class="uil uil-user-circle fs-4 mb-0"></i>
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 text-muted">Fakultas</h6>
                    <p class="fs-5 text-dark fw-bold mb-0">
                      <span class="counter-value" data-target="9"
                        >1</span
                      >
                    </p>
                  </div>
                </div>
{{--
                <span class="text-danger"
                  ><i class="uil uil-chart-down"></i> 0.5%</span
                > --}}
              </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
              <a
                href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3"
              >
                <div class="d-flex align-items-center">
                  <div class="icon text-center rounded-pill">
                    <i class="uil uil-books-circle fs-4 mb-0"></i>
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 text-muted">Kurikulum</h6>
                    <p class="fs-5 text-dark fw-bold mb-0">
                      <span class="counter-value" data-target="34"
                        >0</span
                      >
                    </p>
                  </div>
                </div>

                {{-- <span class="text-success"
                  ><i class="uil uil-arrow-growth"></i> 3.84%</span
                > --}}
              </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
              <a
                href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3"
              >
                <div class="d-flex align-items-center">
                  <div class="icon text-center rounded-pill">
                    <i class="uil uil-shopping-bag fs-4 mb-0"></i>
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 text-muted">Mata Kuliah</h6>
                    <p class="fs-5 text-dark fw-bold mb-0">
                      <span class="counter-value" data-target="53"
                        >0</span
                      >
                    </p>
                  </div>
                </div>

                {{-- <span class="text-success"
                  ><i class="uil uil-arrow-growth"></i> 1.46%</span
                > --}}
              </a>
            </div>
            <!--end col-->

            <div class="col mt-4">
              <a
                href="#!"
                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3"
              >
                <div class="d-flex align-items-center">
                  <div class="icon text-center rounded-pill">
                    <i class="uil uil-store fs-4 mb-0"></i>
                  </div>
                  <div class="flex-1 ms-3">
                    <h6 class="mb-0 text-muted">Tahun Ajaran</h6>
                    <p class="fs-5 text-dark fw-bold mb-0">
                      <span class="counter-value" data-target="34">0</span>
                    </p>
                  </div>
                </div>

                {{-- <span class="text-muted"
                  ><i class="uil uil-analysis"></i> 0.0%</span
                > --}}
              </a>
            </div>
            <!--end col-->
            <!--end col-->
          </div>
          <!--end row-->
        </div>
      </div>
      <!--end container-->

      <!-- Footer Start -->
      @include('partials.kaprodi.footer')
      <!--end footer-->
      <!-- End -->
    </main>
    <!--End page-content" -->
  </div>
  <!-- page-wrapper -->

  <!-- Offcanvas Start -->
  <div
    class="offcanvas offcanvas-end shadow"
    tabindex="-1"
    id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel"
  >
    <div class="offcanvas-header p-4 border-bottom">
      <h5 id="offcanvasLeftLabel" class="mb-0">
        <img
          src="{{ url('assets/images/logo-dark.png') }}"
          height="24"
          class="light-version"
          alt=""
        />
        <img
          src="{{ url('assets/images/logo-light.png') }}"
          height="24"
          class="dark-version"
          alt=""
        />
      </h5>
      <button
        type="button"
        class="btn-close d-flex align-items-center text-dark"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="uil uil-times fs-4"></i>
      </button>
    </div>
    <div class="offcanvas-body p-4">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h6 class="fw-bold">Theme Options</h6>

            <ul class="text-center style-switcher list-unstyled mt-4">
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="rtl-version t-rtl-light"
                  onclick="setTheme('style-rtl')"
                  ><img
                    src="{{ url('assets/images/demos/rtl.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >RTL Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="ltr-version t-ltr-light"
                  onclick="setTheme('style')"
                  ><img
                    src="{{ url('assets/images/demos/ltr.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >LTR Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="dark-rtl-version t-rtl-dark"
                  onclick="setTheme('style-dark-rtl')"
                  ><img
                    src="{{ url('assets/images/demos/dark-rtl.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >RTL Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="dark-ltr-version t-ltr-dark"
                  onclick="setTheme('style-dark')"
                  ><img
                    src="{{ url('assets/images/demos/dark.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >LTR Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="dark-version t-dark mt-4"
                  onclick="setTheme('style-dark')"
                  ><img
                    src="{{ url('assets/images/demos/dark.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >Dark Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="javascript:void(0)"
                  class="light-version t-light mt-4"
                  onclick="setTheme('style')"
                  ><img
                    src="{{ url('assets/images/demos/ltr.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >Light Version</span
                  ></a
                >
              </li>
              <li class="d-grid">
                <a
                  href="{{ url('assets/assets/landing/dist/index.html') }}"
                  target="_blank"
                  class="mt-4"
                  ><img
                    src="{{ url('assets/images/demos/landing.png') }}"
                    class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px"
                    alt=""
                  /><span class="text-dark fw-medium mt-3 d-block"
                    >Landing</span
                  ></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
      <ul class="list-unstyled social-icon social mb-0">
        <li class="list-inline-item mb-0">
          <a
            href="https://1.envato.market/landrick"
            target="_blank"
            class="rounded"
            ><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a
            href="https://dribbble.com/shreethemes"
            target="_blank"
            class="rounded"
            ><i class="uil uil-dribbble align-middle" title="dribbble"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a
            href="https://www.behance.net/shreethemes"
            target="_blank"
            class="rounded"
            ><i class="uil uil-behance align-middle" title="behance"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a
            href="https://www.facebook.com/shreethemes"
            target="_blank"
            class="rounded"
            ><i class="uil uil-facebook-f align-middle" title="facebook"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a
            href="https://www.instagram.com/shreethemes/"
            target="_blank"
            class="rounded"
            ><i class="uil uil-instagram align-middle" title="instagram"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a
            href="https://twitter.com/shreethemes"
            target="_blank"
            class="rounded"
            ><i class="uil uil-twitter align-middle" title="twitter"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="mailto:support@shreethemes.in" class="rounded"
            ><i class="uil uil-envelope align-middle" title="email"></i
          ></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://shreethemes.in" target="_blank" class="rounded"
            ><i class="uil uil-globe align-middle" title="website"></i
          ></a>
        </li>
      </ul>
      <!--end icon-->
    </div>
  </div>
  <!-- Offcanvas End -->
</body>
@endsection


