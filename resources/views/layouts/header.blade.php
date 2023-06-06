<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <h6 class="font-weight-bolder text-white mb-0">OCU-SENSE</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
          @if (Auth::user()->role_as == 'DOCTOR')
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="/home" class="nav-link text-white p-0">
              Home
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="{{ route('pats') }}" class="nav-link text-white p-0">
              Patients
            </a>
          </li>
          @endif
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="" class="nav-link text-white p-0">
              Profile
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <a href="{{ route('logout') }}" class="nav-link text-white p-0" onclick="event.preventDefault();
              this.closest('form').submit();">
                Logout
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->