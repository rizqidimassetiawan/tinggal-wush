<header id="page-header">
  <div class="content-header">
    <div class="d-flex align-items-center">
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
        <i class="fa fa-fw fa-ellipsis-v"></i>
      </button>
    </div>
    <div class="d-flex align-items-center">
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if (Auth::user()->image)
              <img class="rounded-circle" src="{{ asset('storage/'.Auth::user()->image) }}" alt="Header Avatar" style="width: 21px;">
          @else
              <img class="rounded-circle" src="{{ asset('assets/src/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 21px;">
          @endif
          
          <span class="d-none d-sm-inline-block ms-2">{{ Auth::user()->name }}</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            @if (Auth::user()->image)
              <img class="rounded-circle" src="{{ asset('storage/'.Auth::user()->image) }}" alt="Header Avatar" style="width: 100px;">
            @else
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/src/avatars/avatar10.jpg') }}" alt="Header Avatar">
            @endif
            <p class="mt-2 mb-0 fw-medium">{{ Auth::user()->name }}</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
              <span class="fs-sm fw-medium">Profile</span>
              <i class="si si-user"></i>
            </a>
            <form action="/logout" method="post">
              @csrf
              <button class="dropdown-item d-flex align-items-center justify-content-between" type="submit">
                <span class="fs-sm fw-medium">Log Out</span>
                <i class="si si-logout"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div id="page-header-loader" class="overlay-header bg-body-extra-light">
    <div class="content-header">
      <div class="w-100 text-center">
        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
      </div>
    </div>
  </div>
</header>
     
     