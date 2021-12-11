  <aside id="sidebar" class="js-custom-scroll side-nav">
   
     <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
      <!-- Sidebar Sub Title -->
      <li class="sidebar-heading h6">Dashboards</li>
      <!-- End Sidebar Sub Title -->

      <!-- Dashboards -->
      <li class="side-nav-menu-item active">
        <a class="side-nav-menu-link media align-items-center" href="{{route('dashboard')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Dashboards</span>
        </a>
      </li>
      <!-- End Dashboards -->


      <!-- Sidebar Sub Title -->
      <li class="sidebar-heading h6">Actions</li>
      <!-- End Sidebar Sub Title -->

      <!-- Customers -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{url('admin/customers-list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Customers</span>
        </a>
      </li>
      <!-- End Customers -->

      <!-- IP & MAC Addresses -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.customers-IP-MAC.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">IP & MAC Addresses</span>
        </a>
      </li>
      <!-- End IP & MAC Addresses -->

      <!-- Payments -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.payments.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Payments</span>
        </a>
      </li>
      <!-- End Payments -->

      <!-- Approvals -->
      <li class="nav-item dropdown">
        <a style="color:LightGray;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
  <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"/>
  <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z"/>
</svg>
        <span class="side-nav-fadeout-on-closed media-body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approvals</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>
        </a>
        <div class="dropdown-menu" style="background-color:#1B1F34;" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Customers Approval</a>
          <a class="dropdown-item" href="#">Payments Approval</a>
          <a class="dropdown-item" href="#">Complains Approval</a>
      </li>
      <!-- End Approvals -->

      <!-- Complains -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="../../demo-crypto/actions/affiliate-program.html">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-exclamation" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471 1.069.64.257.155.257-.154 1.33-.798L15 5.383V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825Zm1.22-.434L1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217L9.072 7.774 8 8.417l-1.072-.643ZM12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5a.5.5 0 0 0-1 0v1.5a.5.5 0 0 0 1 0V11Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Complains</span>
        </a>
      </li>
      <!-- End Complains -->

      <!-- Billing -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="../../demo-crypto/actions/affiliate-program.html">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Billing</span>
        </a>
      </li>
      <!-- End Billing -->

      <!-- Employees Salary -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.empolyees-salary.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Employees Salary</span>
        </a>
      </li>
      <!-- End Emolyees Salary -->

       <!-- Assets Category -->
       <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.assets-category.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
  <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Assets Category</span>
        </a>
      </li>
      <!-- End Assets Category -->

      <!-- Assets -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.assets.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg>
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Assets</span>
        </a>
      </li>
      <!-- End Assets -->

      <!-- Sidebar Sub Title -->
      <li class="sidebar-heading h6">Settings</li>
      <!-- End Sidebar Sub Title -->

      <!-- Settings -->

       <!-- User Departments -->
       <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.user-departments.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
            {!! file_get_contents('svg/house-door.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">User Departments</span>
        </a>
      </li>
      <!-- End User Departments -->

      <!-- Add User -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.users.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
            {!! file_get_contents('svg/person.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Add User</span>
        </a>
      </li>
      <!-- End Add User -->

      <!-- Mobile Banking Settings -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.mobile-banking.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
            {!! file_get_contents('svg/bank.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Mobile Banking Settings</span>
        </a>
      </li>
      <!-- End Mobile Banking Settings -->


      <!-- Block settings -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.blocks.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          {!! file_get_contents('svg/border-all.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Block Settings</span>
        </a>
      </li>
      <!-- End Block Settings -->

      <!-- Package settings -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.packages.list')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          {!! file_get_contents('svg/boxes.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Package Settings</span>
        </a>
      </li>
      <!-- Package Settings -->

      <!-- Site settings -->
      <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.site.info')}}">
          <span class="side-nav-menu-icon d-flex mr-3">
          {!! file_get_contents('svg/window.svg') !!}
          </span>
          <span class="side-nav-fadeout-on-closed media-body">Site Settings</span>
        </a>
      </li>
      <!-- Site Settings -->

      <!-- End Settings -->
    </ul>
  
  </aside>
  <!-- End Sidebar Nav -->