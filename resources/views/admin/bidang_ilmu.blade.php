@extends('layouts.main');
@section('container');
<body>

  <div class="page-wrapper toggled">
    <!-- sidebar-wrapper -->
    @include('partials.admin.sidebar');
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
      <!-- Top Header -->
      @include('partials.admin.header');
      <!-- Top Header -->

      <div class="container-fluid">
        <div class="layout-specing" style="padding: 50px 14px 24px!important">
          <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">Bidang Ilmu</h5>

            <nav aria-label="breadcrumb" class="d-inline-block">
              <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize">
                  <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-capitalize">
                  <a href="#">Bidang Ilmu</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="mt-4">
            <div class="row">
              <div class="col">

                <label class="mb-0">Fakultas <span style="color:red;">*</span></label>
                <select required class="form-control">
                  <option selected>--Pilih Fakultas--</option>
                  @foreach ($fakultas as $f)
                  <option value="{{ $f->id }}">{{ $f->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col">
                <label class="mb-0">Program Studi <span style="color:red;">*</span></label>
                <select required class="form-control">
                  <option selected>--Pilih Program Studi--</option>
                  @foreach($prodi as $p)
                  <option value="informatika">{{ $p->nama_prodi }}</option>
                  @endforeach
                  {{-- <option value="Sistem Informasi">Sistem Informasi</option> --}}
                </select>
              </div>
              <div class="col">
                <button class="btn btn-primary mt-4" style="padding: 5px; width: 70px;">Pilih</button>
              </div>
            </div>

            <!-- <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                  <li class="breadcrumb-item text-capitalize">
                    <a href="index.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item text-capitalize">
                    <a href="#">Bidang Ilmu</a>
                  </li>
                </ul>
              </nav> -->
          </div>

          <div class="row">
            <div class="col-12 mt-4">
              <div class="table-responsive shadow rounded">
                <div class="d-md-flex justify-content-end mt-sm-0">
                  <a href="#" style="margin-right: 20px" class="btn btn-primary mt-3" data-bs-toggle="modal"
                    data-bs-target="#add-bidang-ilmu">Tambah
                    Data</a>
                </div>
                <table class="table table-center bg-white mb-0">
                  <thead>
                    <tr>
                      <th class="border-bottom p-3">No.</th>
                      <th class="text-center border-bottom p-3" style="min-width: 220px">
                        Nama Bidang Ilmu
                      </th>
                      <!-- <th class="text-center border-bottom p-3" style="min-width: 220px">
                        Fakultas
                      </th> -->
                      <th class="text-center border-bottom p-3" style="min-width: 200px">
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Start -->
                    @foreach ($bidang_ilmu as $bi)
                    <tr>
                      <th class="p-3">1</th>
                      <td class="p-3">
                        <!-- <a href="#" class="text-center"> -->
                        <div class="d-flex align-items-center">
                          <!-- <img
                                src="assets/images/client/01.jpg"
                                class="avatar avatar-ex-small rounded-circle shadow"
                                alt=""
                              /> -->
                          <span class="ms-2">{{ $bi->nama }}</span>
                        </div>
                        <!-- </a> -->
                      </td>
                      <td class="text-center p-3">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                          data-bs-target="#update-bidang-ilmu">Update</button>
                        <button class="btn btn-sm btn-soft-primary ms-2" data-toggle="modal"
                          data-target="#delete-bidang-ilmu">Hapus</button>
                        <!-- <a href="#" class="btn btn-sm btn-soft-primary ms-2"
                            >Hapus</a -->

                      </td>
                    </tr>
                    @endforeach
                    <!-- End -->
                  </tbody>
                </table>
              </div>
            </div>
            <!--end col-->
          </div>
          <!--end row-->

          <div class="row text-center">
            <!-- PAGINATION START -->
            <div class="col-12 mt-4">
              <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">Next</a>
                  </li>
                </ul>
              </div>
            </div>
            <!--end col-->
            <!-- PAGINATION END -->
          </div>
          <!--end row-->
        </div>
      </div>
      <!--end container-->

      <!-- Footer Start -->
      @include('partials.admin.footer');
      <!--end footer-->
      <!-- End -->
    </main>
    <!--End page-content" -->
  </div>
  <!-- page-wrapper -->

  <!-- Start Modal Tambah Program Studi-->
  <div class="modal fade" id="add-bidang-ilmu" tabindex="-1" aria-labelledby="tambahmodel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-bottom p-3">
          <h5 class="modal-title" id="tambahmodel">
            Formulir Bidang Ilmu
          </h5>
          <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal">
            <i class="uil uil-times fs-4 text-dark"></i>
          </button>
        </div>

        <div class="modal-body p-3 pt-4">
          <div class="mt-4 mt-sm-0">
            <form>
                <div class="row">
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Nama Bidang Ilmu
                        <span class="text-danger">*</span></label>
                      <input name="name" id="name" type="text" class="form-control" />
                    </div>
                  </div>
                  <!--end col-->
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                      Tambah Bidang Ilmu
                    </button>
                  </div>
                  <!--end col-->
                  <!-- </div> -->
            </form>
          </div>
          <!--end col-->
          <!-- </div> -->
          <!--end row-->
        </div>
      </div>
    </div>
  </div>
  <!-- End modal -->

  <!-- Offcanvas Start -->
  <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
      <h5 id="offcanvasLeftLabel" class="mb-0">
        <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="" />
        <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="" />
      </h5>
      <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
        aria-label="Close">
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
                <a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img
                    src="assets/images/demos/rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a>
              </li>
              <li class="d-grid">
                <a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img
                    src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a>
              </li>
              <li class="d-grid">
                <a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"
                  onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png"
                    class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px" alt="" /><span
                    class="text-dark fw-medium mt-3 d-block">RTL Version</span></a>
              </li>
              <li class="d-grid">
                <a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img
                    src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a>
              </li>
              <li class="d-grid">
                <a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img
                    src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a>
              </li>
              <li class="d-grid">
                <a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img
                    src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">Light
                    Version</span></a>
              </li>
              <li class="d-grid">
                <a href="../../landing/dist/index.html" target="_blank" class="mt-4"><img
                    src="assets/images/demos/landing.png" class="img-fluid rounded-md shadow-md d-block mx-auto"
                    style="width: 270px" alt="" /><span class="text-dark fw-medium mt-3 d-block">Landing</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
      <ul class="list-unstyled social-icon social mb-0">
        <li class="list-inline-item mb-0">
          <a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i
              class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i
              class="uil uil-dribbble align-middle" title="dribbble"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i
              class="uil uil-behance align-middle" title="behance"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i
              class="uil uil-facebook-f align-middle" title="facebook"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i
              class="uil uil-instagram align-middle" title="instagram"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i
              class="uil uil-twitter align-middle" title="twitter"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle"
              title="email"></i></a>
        </li>
        <li class="list-inline-item mb-0">
          <a href="https://shreethemes.in" target="_blank" class="rounded"><i class="uil uil-globe align-middle"
              title="website"></i></a>
        </li>
      </ul>
      <!--end icon-->
    </div>
  </div>
  <!-- Offcanvas End -->

  <!-- javascript -->
  <!-- JAVASCRIPT -->
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/feather-icons/feather.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <!-- Main Js -->
  <script src="assets/js/plugins.init.js"></script>
  <script src="assets/js/app.js"></script>
</body>
@endsection

