<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background: #4a4a4a;">
    <a class="navbar-brand brand-logo" href="{{ route('home') }}">
      <img src="{{ asset('images/osms-small-icon-ts.png') }}" alt="logo" style="height: 30px;width: 30px" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
      <img  src="{{ asset('images/osms-small-icon-ts.png') }}" alt="logo" style="height: 27px;width: 27px" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <!-- <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">      
    </ul> -->
    <ul class="navbar-nav navbar-nav-left">      
       <!-- Profile nav -->
       <!-- <li class="nav-item dropdown d-none d-xl-inline-block"> -->
       <li class="nav-item dropdown d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text">{{ ucwords(auth()->user()->display_name) }}</span>
          <img class="img-xs rounded-circle" src="{{ asset('images/user-avatar.png') }}" alt="Profile image"> 
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
      
          <a href="{{ route('profile') }}" class="dropdown-item" >
            <i class="mdi mdi-account-settings-variant"></i> {{ __('Profile') }}
          </a>
          <a href="{{ route('change_password') }}" class="dropdown-item" >
            <i class="mdi mdi-textbox-password"></i> {{ __('Change Password') }}
          </a>
           <hr/>
          <a href="{{ route('logout') }}" class="dropdown-item"
            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            <i class="mdi mdi-logout"></i> {{ __('Sign Out') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <!-- Logout -->
        </div>
      </li>
      <li class="nav-item dropdown ml-4">
        <a style="color: #fafafa;" class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell-ring"></i>
          <span class="count bg-danger">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" style="border-radius: 0 !important;border:1px solid #4a4a4a;" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom" href="{{url('admin_unread_notifications')}}">
            <p class="mb-0 font-weight-medium float-left">You have  0 new notifications </p>
            <span class="badge badge-pill badge-danger float-right">View all</span>
          </a>
        </div>
      </li>
      <li class="nav-item d-none ml-4">
        <a style="color: #fafafa;" class="nav-link"
         loading-text="Getting Contact Form..." href="{{ route('contact') }}">
          <i class="mdi mdi-contact-mail"></i> Contact
        </a>
      </li>      

    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>