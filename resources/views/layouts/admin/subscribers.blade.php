@extends('layouts.app')

@section('links')

    <link href="{{asset('libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

@endsection


@section('content')
<br>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Subscribers</h4>


                                    <table id="datatable-buttons" class="table text-center table-striped table-bordered table-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Product</th>
                                            <th>Subscription</th>
                                            <th>Created at</th>
                                            <th>Subscribed at</th>
                                            <th class="text-center">Action</th>
                                            <th></th>
                                        </tr>
                                        </thead>


                                        <tbody>
@foreach ($subscriber as $user)

                                        <tr>
                                            <td>{{$user['id']}}</td>
                                            <td>{{$user['name']}}</td>
                                            <td>{{$user['email']}}</td>
                                            <td>{{$user[0]['product_name']}}</td>
                                            <td>{{$user[0]['plan_name']}}</td>
                                            <td>{{$user['created_at']}}</td>
                                            <td>{{$user['updated_at']}}</td>
                                            <td>

                                                <form action="" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="edit" value="">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>

                                                <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="delete" value="">
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
                        <!-- end row -->

@endsection



@section('scripts')

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- third party js -->
    <script src="{{asset('libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('libs/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('libs/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('libs/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('libs/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('libs/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('libs/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('libs/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('libs/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('libs/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('libs/datatables/dataTables.select.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('libs/pdfmake/vfs_fonts.js')}}"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{asset('js/pages/datatables.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>
@endsection

