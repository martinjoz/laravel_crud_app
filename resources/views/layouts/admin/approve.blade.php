@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <br>



    <div class="row mt-2">
        <div class="col-xl-12 col-md-6">
        <div class="card-box">
            <div style="height: 126px" class="table-responsive">
            <table class="table table-striped mb-0 text-center">
                <h4 class="header-title">Approvals</h4>

             <form action="" method="post">
                <thead>
                <tr>
                    <th> ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Product</th>
                    <th>Subscription</th>
                    <th>Created at</th>
                    <th>Approve</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Martin Njoroge</td>
                    <td>muchenemartin00@gmail.com</td>
                    <td>Movie</td>
                    <td>Monthly</td>
                    <td>24/1/22</td>
                    <td>

                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="edit" value="">
                        <input type="checkbox" name="" id="">
                    </td>
                </tr>
                </tbody>
                 </form>
            </table>
            </div>
        </div>
                    <input class="btn btn-primary" type="submit" value="Approve">
        </div>

    </div>

    <!-- end row -->
    </div>


      <!--  Modal content for the above example -->
      <div
        class="modal fade bs-example-modal-lg"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myLargeModalLabel"
        aria-hidden="true"
        style="display: none"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Product Wizard</h4>
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
              <form action="">
                <p>Provide your Product details.</p>

                <input
                  type="text"
                  required
                  id="example-input-normal"
                  name="example-input-normal"
                  class="form-control mt-2"
                  placeholder="Product Name"
                />

                <select required id="productType" class="custom-select mt-1">
                  <option value="" selected>Select Product Type</option>
                  <option value="1">Movie</option>
                  <option value="2">Song</option>
                  <option value="3">Series</option>
                </select>

                <button
                  type="submit"
                  class="
                    btn btn-purple btn-rounded
                    w-md
                    waves-effect waves-light
                    mb-3
                    mt-2
                  "
                >
                  <i class="fas fa-plus-circle"></i> Create Product
                </button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    <!-- container-fluid -->
</div>
@endsection


@section('scripts')

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>

@endsection

