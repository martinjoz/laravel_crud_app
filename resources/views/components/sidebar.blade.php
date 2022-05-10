<div class="left-side-menu">
<div class="slimscroll-menu">
    <!-- User box -->
    <div class="user-box text-center">
    <img
        src="images/users/user-1.jpg"
        alt="user-img"
        title="Mat Helme"
        class="rounded-circle img-thumbnail avatar-md"
    />
    <div class="dropdown">
        <a
        href="#"
        class="user-name dropdown-toggle h5 mt-2 mb-1 d-block"
        data-toggle="dropdown"
        aria-expanded="false"
        >{{Auth::user()->name}}</a
        >
    </div>
    <p class="text-muted">{{Auth::user()->email}}</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
    <ul class="metismenu" id="side-menu">
        <li class="menu-title">Navigation</li>

        <li>
        <a href="dashboard">
            <i class="mdi mdi-view-dashboard"></i>
            <span> Dashboard </span>
        </a>
        </li>

        <li>
        <a href="products">
            <i class="mdi mdi-briefcase-account"></i>
            <span>Products </span>
        </a>
        </li>

        <li>
        <a href="subscribers">
            <i class="fas fa-users"></i>
            <span> View Subscribers </span>
        </a>
        </li>
        <li>
        <a href="approve">
            <i class="fas fa-user-edit"></i>
            <span> Approve Subscribers</span>
        </a>
        </li>

        <li class="menu-title">Profile</li>

        <li>
        <a href="profile">
            <i class="mdi mdi-account-circle"></i>
            <span> Account </span>
        </a>
        </li>
    </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
<!-- Sidebar -left -->
</div>
