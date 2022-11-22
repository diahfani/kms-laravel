@extends('layouts.main')
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

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
      <div class="bg-overlay bg-overlay-white"></div>
      <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
        <div class="row">
          <div class="col-12">
            <div class="card form-signin p-4 rounded shadow">
              <form action="/" method="post">
                @csrf
                <a href="index.html"
                  ><img
                    src="assets/images/download.png"
                    class="avatar avatar-small mb-4 d-block mx-auto"
                    alt=""
                /></a>
                <h5 class="mb-3 text-center">Silahkan Login</h5>

                <div class="form-floating mb-2">
                  <input
                    type="email"
                    class="form-control  @error('email') is-invalid @enderror"
                    id="floatingInput"
                    {{-- placeholder="name@example.com" --}}
                    name="email"
                    autofocus
                    required
                    {{-- value={{ old('email') }} --}}
                  />
                  <label for="floatingInput">Email address</label>
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Password"
                    name="password"
                    id="password"
                    required
                  />
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="d-flex justify-content-between">
                  <!-- <div class="mb-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault"
                      />
                      <label class="form-check-label" for="flexCheckDefault"
                        >Remember me</label
                      >
                    </div>
                  </div> -->
                  <p class="forgot-pass mb-3">
                    <a
                      href="{{ route('forgotpassword') }}"
                      class="text-dark small fw-bold"
                      >Forgot password ?</a
                    >
                  </p>
                </div>

                <button class="btn btn-primary w-100" type="submit">
                  Sign in
                </button>

                <!-- <div class="col-12 text-center mt-3">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="signup.html" class="text-dark fw-bold">Sign Up</a></p>
                                </div> -->
                <!--end col-->

                <p class="mb-0 text-muted mt-3 text-center">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Landrick.
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
  </body>
