
@extends('appAuth')

@section('content')
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="text-center">
              <img
                src="images/trasparent.png"
                alt=""
                height="99"
                class="logo-dark mx-auto"
              />

              <p
                style="color: white; opacity: 0.7"
                class="mt-2 font-16 mb-1"
              ></p>
            </div>
            <div style="border-radius: 11px" class="card">
              <div class="card-body p-4">
                <div class="text-center mb-4">
                  <h4 class="text-uppercase mt-0">
                    <svg
                      style="margin-right: 5px"
                      xmlns="http://www.w3.org/2000/svg"
                      width="19"
                      height="19"
                      fill="currentColor"
                      class="bi bi-lock-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"
                      />
                    </svg>
                    Client Sign In
                  </h4>
                </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="16"
                              fill="currentColor"
                              class="bi bi-person-fill"
                              viewBox="0 0 16 16"
                            >
                              <path
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                              />
                            </svg>
                          </span>
                        </div>
                        <input
                          class="form-control"
                          type="email"
                          id="emailaddress"
                          required=""
                          placeholder="Email"
                          name="email"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="16"
                              fill="currentColor"
                              class="bi bi-key-fill"
                              viewBox="0 0 16 16"
                            >
                              <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                              />
                            </svg>
                          </span>
                        </div>
                        <input
                          class="form-control"
                          type="password"
                          required=""
                          id="password"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="remember"
                        name="remember"
                        checked

                      />
                      <label class="custom-control-label" for="checkbox-signin"
                        >Remember me</label
                      >
                    </div>
                  </div>

                  <div class="form-group mb-0 text-center">
                    <button
                      style="background-color: #1a2ba7de"
                      class="btn btn-primary btn-block"
                      type="submit"
                    >
                      Log In
                    </button>
                  </div>
                  <div class="form-group mt-2 text-center">
                    Or Continue with
                  </div>

                  <div
                    style="display: flex; justify-content: space-around"
                    class="form-group mt-2 text-center"
                  >
                    <a style="color: #4c4f52" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-google"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"
                        />
                      </svg>
                      Google
                    </a>
                    <a style="color: #4c4f52" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-facebook"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                        />
                      </svg>
                      Facebook
                    </a>

                    <a style="color: #4c4f52" href="#">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-github"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                        />
                      </svg>
                      Github
                    </a>
                  </div>
                </form>

                <div class="col-12 text-center">
                  <p>
                    <a
                      data-toggle="modal"
                      data-target=".resetPasswordModal"
                      href="#"
                      class="ml-1"
                      ><i class="fa fa-lock mr-1"></i>Forgot your password?</a
                    >
                  </p>
                  <p class="text-muted">
                    Don't have an account?
                    <a href="{{route('register')}}" class="text-dark ml-1"
                      ><b>Sign Up</b></a
                    >
                  </p>
                </div>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->
          </div>
          <div
            class="modal fade resetPasswordModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="mySmallModalLabel"
            aria-hidden="true"
            style="display: none"
          >
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="mySmallModalLabel">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      fill="blue"
                      class="bi bi-shield-lock-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"
                      />
                    </svg>
                  </h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    ×
                  </button>
                </div>
                <div class="modal-body">
                  <div class="">
                    <div class="text-center mb-4">
                      <h4 class="text-uppercase mt-0 mb-2">
                        Reset Your Password
                      </h4>
                      <p class="mb-0 font-16">
                        Enter your email address and we'll send you an email
                        with instructions to reset your password.
                      </p>
                    </div>

                    <form action="#">
                      <div class="form-group mb-2">
                        <label for="emailaddress">Email address</label>
                        <input
                          class="form-control"
                          type="email"
                          id="emailaddress"
                          required=""
                          placeholder="Enter your email"
                          name=""
                        />
                      </div>

                      <div class="form-group mb-0 text-center">
                        <button
                          style="background-color: blue"
                          class="btn btn-primary btn-block"
                          type="submit"
                        >
                          Reset Password
                        </button>
                      </div>
                    </form>
                  </div>
                  <!-- end card-body -->
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
@endsection
