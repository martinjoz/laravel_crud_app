@extends('layouts.appUser')

@section('content')
<br>
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8">
                <div class="bg-picture card-box">
                  <div class="profile-info-name">
                    <input
                      hidden
                      id="profilePicUpload"
                      type="file"
                      class="dropify"
                    />
                    <label
                      style="display: block; cursor: pointer"
                      for="profilePicUpload"
                      title="Upload a profile picture"
                    >
                      <img
                        style="height: 250px"
                        src="images/profile.jpg"
                        class="rounded-circle img-thumbnail float-left mr-3"
                        alt="profile-image"
                      />
                    </label>

                    <div class="profile-info-detail overflow-hidden">
                      <h3>Your Details</h3>
                      <input
                        type="text"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control mt-2"
                        placeholder="Name"
                        value="Alexandra Clarkson"
                      />
                      <input
                        type="email"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control mt-2"
                        placeholder="email"
                        value="you@example.com"
                      />
                      <input
                        type="number"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control mt-2"
                        placeholder="Name"
                        value="07101111111"
                      />

                      <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                          <a
                            href="javascript: void(0);"
                            class="social-list-item border-purple text-purple"
                            title="Save profile"
                            ><i class="fas fa-save"></i
                          ></a>
                        </li>
                      </ul>
                    </div>

                    <div class="clearfix"></div>
                  </div>
                </div>
                <!--/ meta -->
              </div>

              <div class="col-sm-4">
                <div class="card-box">
                  <h3>Update your password</h3>

                  <ul class="list-group mb-0 user-list">
                    <li class="list-group-item">
                      <input
                        type="password"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control"
                        placeholder="Old password"
                      />
                    </li>

                    <li class="list-group-item">
                      <input
                        type="password"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control"
                        placeholder="New password"
                      />
                    </li>

                    <li class="list-group-item">
                      <input
                        type="password"
                        required
                        id="example-input-normal"
                        name="example-input-normal"
                        class="form-control"
                        placeholder="Confirm password"
                      />
                    </li>
                  </ul>
                  <div style="text-align: center">
                    <button
                      type="submit"
                      class="
                        btn btn-purple btn-rounded
                        w-md
                        waves-effect waves-light
                        mt-2
                      "
                    >
                      Update Password
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div style="text-align: center" class="col-sm-12 p-4">
                  <p>
                    Your credentials are always secure, encrypted and privately
                    held by us.
                  </p>
                  <hr style="border-top: 1px solid #2d3beb" />
                  <button
                    data-toggle="modal"
                    data-target=".bs-example-modal-center"
                    type="submit"
                    class="
                      btn btn-danger btn-rounded
                      w-md
                      waves-effect waves-light
                      mt-2
                    "
                  >
                    Delete your Account
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- container-fluid -->
        </div>



    <div
      class="modal fade bs-example-modal-center"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myCenterModalLabel"
      aria-hidden="true"
      style="display: none"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4
              style="color: red; font-weight: 200"
              class="modal-title"
              id="myCenterModalLabel"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-trash-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"
                />
              </svg>
              Delete Your Account!!!
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
            <p>
              This Action Cannot be undone, Your Projects and Setup will be lost.
              <div class="mt-2">
                <form action="">
                  <input
                  type="password"
                  required
                  id="example-input-normal"
                  name="example-input-normal"
                  class="form-control mt-2"
                  placeholder="Confirm Your Password"
                />

                <input
                  required
                  id="checkbox1"
                  type="checkbox"
                  class="mt-2"
                  data-parsley-multiple="groups"
                  data-parsley-mincheck="2"
                />
                <label for="checkbox1">
                  Delete Account and Projects I have.
                </label>


               <div>
                <button
                type="submit"
                class="
                  btn btn-danger
                  w-md
                  waves-effect waves-light
                  mb-3
                  mt-2
                "
              >
                  Delete
              </button>
               </div>


              </form>
              </div>
            </p>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection


@section('scripts')

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>

@endsection

