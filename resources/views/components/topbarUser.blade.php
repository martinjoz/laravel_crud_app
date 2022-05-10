<div class="navbar-custom">
<ul class="list-unstyled topnav-menu float-right mb-0">
    <li class="d-none d-sm-block">
    <form class="app-search">
        <div class="app-search-box">
        <div class="input-group">
            <input
            class="form-control"
            type="text"
            id="emailaddress"
            required=""
            placeholder="web/app/domain"
            />
            <div class="input-group-append">
            <button class="btn" type="submit">
                <i class="fe-search"></i>
            </button>
            </div>
        </div>
        </div>
    </form>
    </li>

    <li class="dropdown notification-list">
    <a
        class="nav-link dropdown-toggle waves-effect"
        data-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
    >
        <i class="fe-bell noti-icon"></i>
        <span class="badge badge-danger rounded-circle noti-icon-badge"
        >9</span
        >
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
        <!-- item-->
        <div class="dropdown-item noti-title">
        <h5 class="m-0">
            <span class="float-right">
            <a href="" class="text-dark">
                <small>Clear All</small>
            </a> </span
            >Notification
        </h5>
        </div>

        <div class="slimscroll noti-scroll">
        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <div class="notify-icon bg-primary">
            <i class="mdi mdi-comment-account-outline"></i>
            </div>
            <p class="notify-details">
            You have new approval(s)
            <small class="text-muted">1 min ago</small>
            </p>
        </a>

        <!-- All-->
        <a
            href="javascript:void(0);"
            class="
            dropdown-item
            text-center text-primary
            notify-item notify-all
            "
        >
            View all
            <i class="fi-arrow-right"></i>
        </a>
        </div>
    </div>
    </li>

    <li class="dropdown notification-list">
    <a
        class="nav-link dropdown-toggle nav-user mr-0 waves-effect"
        data-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
    >
        <img
        src="images/users/user-1.jpg"
        alt="user-image"
        class="rounded-circle"
        />
        <span class="pro-user-name ml-1">
           {{ Auth::user()->name }}
         <i class="mdi mdi-chevron-down"></i>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right profile-dropdown">
        <!-- item-->
        <div class="dropdown-header noti-title">
        <h6 class="text-overflow m-0">Welcome.</h6>
        </div>

        <!-- item-->
        <a href="profile-user" class="dropdown-item notify-item">
        <i class="fe-user"></i>
        <span>My Account</span>
        </a>

        <div class="dropdown-divider"></div>

        <!-- item-->
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
        <i class="fe-log-out"></i>
        <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </li>
</ul>

<!-- LOGO -->

<ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
    <li>
    <button class="button-menu-mobile disable-btn waves-effect">
        <i class="fe-menu"></i>
    </button>
    </li>

    <li>
    <h4 class="page-title-main">
        <img
        style="height: 50px"
        src="images/trasparent black.png"
        alt=""
        srcset=""
        />
        User Dashboard
    </h4>
    </li>
</ul>
</div>
