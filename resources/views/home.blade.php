
@extends('layouts.appUser')
@section('content')

    <div class="container-fluid">
    <br>

    <div class="row">
        <div class="col-xl-4 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-4">Total Users</h4>

            <div class="widget-chart-1">
            <div class="widget-chart-box-1 float-left" dir="ltr">
                <input
                data-plugin="knob"
                data-width="80"
                data-height="80"
                data-fgColor="green"
                data-bgColor="gray"
                value="59"
                data-skin="tron"
                data-angleOffset="180"
                data-readOnly="true"
                data-thickness=".15"
                />
            </div>

            <div class="widget-detail-1 text-right">
                <h2 class="font-weight-normal pt-2 mb-1">45</h2>
                <p class="text-muted mb-1">Subscribed</p>
            </div>
            </div>
        </div>
        </div>
        <!-- end col -->


        <div class="col-xl-4 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-4">Total Products</h4>

            <div class="widget-chart-1">
            <div class="widget-chart-box-1 float-left" dir="ltr">
                <input
                data-plugin="knob"
                data-width="80"
                data-height="80"
                data-fgColor="blue"
                data-bgColor="gray"
                value="59"
                data-skin="tron"
                data-angleOffset="180"
                data-readOnly="true"
                data-thickness=".15"
                />
            </div>

            <div class="widget-detail-1 text-right">
                <h2 class="font-weight-normal pt-2 mb-1">45</h2>
                <p class="text-muted mb-1">New</p>
            </div>
            </div>
        </div>
        </div>
        <!-- end col -->


        <div class="col-xl-4 col-md-6">
        <div class="card-box">

            <h4 class="header-title mt-0 mb-4">Total Approvals</h4>

            <div class="widget-chart-1">
            <div class="widget-chart-box-1 float-left" dir="ltr">
                <input
                data-plugin="knob"
                data-width="80"
                data-height="80"
                data-fgColor="pink"
                data-bgColor="gray"
                value="49"
                data-skin="tron"
                data-angleOffset="180"
                data-readOnly="true"
                data-thickness=".15"
                />
            </div>

            <div class="widget-detail-1 text-right">
                <h2 class="font-weight-normal pt-2 mb-1">35</h2>
                <p class="text-muted mb-1">Todo</p>
            </div>
            </div>
        </div>
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

    <div class="row">


        <div class="col-xl-4">
        <div class="card-box">


            <h4 class="header-title mt-0">Add a Project</h4>

            <div class="widget-chart text-center">

            <ul class="list-inline chart-detail-list mb-0">
                <li class="list-inline-item">
                <h5  >
                <a style="color: #ff8acc" href="domain.html">  <i class="fa fa-circle mr-1"></i>Domain</a>
                </h5>
                </li>
                <li class="list-inline-item">
                <h5 style="color: #5b69bc">
                    <a style="color: #5b69bc" href="projects.html">  <i class="fa fa-circle mr-1"></i>Web/App</a>

                </h5>
                </li>
                <li class="list-inline-item">
                <h5>
                    <a  style="color: #5b69bc" href="projects.html">  <i class="fa fa-circle mr-1"></i>USSD</a>


                </h5>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- end col -->

        <div class="col-xl-8">
        <div class="card-box">


            <h4  style="line-height: 2.2;letter-spacing: 1px;" class="header-title mt-0">
            This dashboard gives you (our client) direct access to our developers and a better and more efficient way of to manage your projects.
                Projects ordered through this dashboard get
            a<span style="color: #5b69bc">
                10% Discount   <i class="fa fa-circle mr-1"></i>
            </span>


        </div>
        </div>




        <!-- end col -->
    </div>
    <!-- end row -->



    <div class="row">
        <div class="col-xl-4">
        <div class="card-box">
            <div class="dropdown float-right">
            <a
                href="#"
                class="dropdown-toggle arrow-none card-drop"
                data-toggle="dropdown"
                aria-expanded="false"
            >
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item"
                >Open inbox</a
                >

            </div>
            </div>

            <h4 class="header-title mb-3">Inbox</h4>

            <div class="inbox-widget">
            <div class="inbox-item">
                <a href="mail.html">
                <div class="inbox-item-img">
                    <img
                    src="assets/images/users/user-1.jpg"
                    class="rounded-circle"
                    alt=""
                    />
                </div>
                <h5 class="inbox-item-author mt-0 mb-1">Chadengle</h5>
                <p class="inbox-item-text">
                    Hey! there I'm available...
                </p>
                <p class="inbox-item-date">13:40 PM</p>
                </a>
            </div>




            </div>
        </div>
        </div>
        <!-- end col -->

        <div class="col-xl-8">
        <div class="card-box">


            <h4 class="header-title mt-0 mb-3"> Projects</h4>

            <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Assign</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Adminto Admin v1</td>
                    <td>01/01/2017</td>
                    <td>26/04/2017</td>
                    <td>
                    <span class="badge badge-danger">Released</span>
                    </td>
                    <td>Coderthemes</td>
                </tr>


                </tbody>
            </table>
            </div>
        </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- container-fluid -->
    </div>
@endsection


@section('scripts')

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- knob plugin -->
    <script src="{{asset('libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('libs/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard init js-->
    <script src="{{asset('js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>

@endsection
