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
                      xmlns="http://www.w3.org/2000/svg"
                      width="26"
                      height="26"
                      fill="currentColor"
                      class="bi bi-person-circle"
                      viewBox="0 0 16 16"
                    >
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                      <path
                        fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                      />
                    </svg>
                    Create A Free Account.
                  </h4>
                </div>

                <form action="{{route('register')}}" method="POST">
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
                              class="bi bi-file-earmark-person"
                              viewBox="0 0 16 16"
                            >
                              <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                              <path
                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"
                              />
                            </svg>
                          </span>
                        </div>
                        <input
                          class="form-control"
                          type="text"
                          id="fullname"
                          required=""
                          placeholder="Full Name"
                          name="name"
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
                          autocomplete="off"
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
                          autocomplete="off"
                          name="password"
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
                          placeholder="Confirm the Password"
                          name="password_confirmation"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-0 text-center">
                    <button
                      style="background-color: #1a2ba7de"
                      class="btn btn-primary btn-block"
                      type="submit"
                    >
                      Sign up
                    </button>
                  </div>
                  <div class="form-group mt-2 text-center">Or Sign up with</div>

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
                  <p class="text-muted">
                    Have an account?
                    <a href="{{route('login')}}" class="text-dark ml-1"
                      ><b>Sign in</b></a
                    >
                  </p>
                </div>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
@endsection




