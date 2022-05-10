@extends('layouts.appUser')

@section('content')

    <div class="container-fluid">
        <br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success">

        {{ session('message') }}
    </div>
@endif
            <div class="row">
              <div class="col-sm-4">
                <button
                  type="button"
                  data-toggle="modal"
                  data-target=".bs-example-modal-lg"
                  class="
                    btn btn-purple btn-rounded
                    w-md
                    waves-effect waves-light
                    mb-3
                  "
                >
                  <i class="fas fa-plus-circle"></i> Add Product
                </button>

              </div>
            </div>
            <!-- end row -->



    <div class="row mt-2">
        <div class="col-xl-12 col-md-6">
        <div class="card-box">
            <div class="table-responsive">
            <table class="table table-striped mb-0 text-center">
                <h4 class="header-title">Your Products</h4>
                <thead>
                <tr>
                    <th> ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Subscription</th>
                    <th>Created at</th>
                    <th>Expiring In</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
@foreach ($data as $product)

                <tr>
                    <th scope="row">{{$product['product_id']}}</th>
                    <td>{{$product['product_name']}}</td>
                    <td><img src="images/products/{{$product['img']}}" height="30px" class="rounded-circle" alt=""></td>
                    <td>{{$product['plan_name']}}</td>
                    <th>{{$product['created_at']}}</th>
                    <td>{{$product['updated_at']}}</td>
                    <td class="text-success">Approved</td>
                </tr>
    
@endforeach
         
                </tbody>
            </table>
            </div>
        </div>
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
              <form action="save/product" method="POST">
                @csrf
                @method("POST")
                <p>Provide your Product details.</p>

                <select name="name" required id="productType" class="custom-select mt-1">
                  <option value="" selected>Select Product Name</option>
                        @foreach ($product1 as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                </select>

                <select name="plan" required id="productType" class="custom-select mt-1">
                  <option value="" selected>Select Subscription</option>
                        @foreach ($plan1 as $plan)
                            
                            <option value="{{$plan->id}}">{{$plan->name}}</option>

                        @endforeach
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
                  <i class="fas fa-plus-circle"></i> Add Product
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

