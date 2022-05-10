@extends('layouts.app')

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
                  <i class="fas fa-plus-circle"></i> Create Product
                </button>

              </div>
              <div class="col-sm-8">
                <div class="project-sort float-right">
                  <div class="project-sort-item">
                    <form class="form-inline">
                      <div class="form-group mr-2">
                        <label>Stage :</label>
                        <select class="form-control ml-2 form-control-sm">
                          <option>All</option>
                          <option>Completed</option>
                          <option>in Progress</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->



    <div class="row mt-2">
        <div class="col-xl-12 col-md-6">
        <div class="card-box">
            <div class="table-responsive table-bordered">
            <table class="table table-striped">
                <h4 class="header-title mt-1 pl-0.4"><button class="btn btn-info">Total Products: {{count($products)}}</button></h4>
                <thead>
                <tr>
                    <th> ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($products as $product)

                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td><img src="images/products/{{$product->image_path}}" height="30px" class="rounded-circle" alt=""></td>
                    <td>{{$product->created_at->diffForHumans()}}</td>
                    <td>{{$product->updated_at->diffForHumans()}}</td>
                    <td class="text-right">

                        <form action="" method="post">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="edit" value="">
                        <button
                        type="button"
                        data-toggle="modal"
                        data-target=".bs-example-modal-{{$product->id}}"
                        class="
                            btn btn-purple
                        "
                        ><i class="fas fa-edit"></i></button>
                        </form>
                    </td>
                    <td>

                        <form action="{{route('posts.destroy',$product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="delete" value="{{$product->id}}">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
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


      <!--  Modal content for the Creating Product -->
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
              <form action="{{route('posts.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                @method("POST")
                <p>Enter Product Name</p>

                <input type="text" class="input-group-text" name="name" id=""><br>
                <label for="file">Product Image: </label><br>
                <input type="file" name="file" class="fileupload" id=""><br>
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




      <!--  Modal content for the Editing Product -->
@foreach ($products as $product)

      <div
        class="modal fade bs-example-modal-{{$product->id}}"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myLargeModalLabel"
        aria-hidden="true"
        style="display: none"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myLargeModalLabel">Update Wizard</h4>
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
              <form action="{{route('posts.update',$product->id)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <p>Enter Product Name</p>

                <input type="text" class="input-group-text" value="{{$product->name}}" name="name" id=""><br>
                <label for="file">Product Image: </label><br>
                <input type="file" name="file{{$product->id}}" class="fileupload" id=""><br>
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
                  <i class="fas fa-plus-circle"></i> Update
                </button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

@endforeach
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

