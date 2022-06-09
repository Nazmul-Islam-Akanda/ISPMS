<!-- Header -->
<header class="header header-light bg-white">

    <nav class="navbar flex-nowrap p-0">
    <div class="navbar-brand-wrapper col-auto">
     
      <!-- Company Name -->
      {{--@dd($site_infos)--}}
      @foreach ($site_infos as $site_info)
      <h4 style="color:yellow"><b><img src="{{url('/uploads/'.$site_info->logo)}}" width="50px" alt="Company Logo"> {{$site_info->company_name}}</b></h4>
      @endforeach
      <!-- Company Name -->
    </div>


    <div class="col-md-4">
        <select class="form-control" size="1" name="links" onchange="window.location.href=this.value;">
            <option value="">Select language</option>
            <option value="{{route('language','en')}}">EN</option>
            <option value="{{route('language','bn')}}">BN</option>
            <option value="{{route('language','ar')}}">AR</option>
        </select>
    </div>

        <!-- Header User Dropdown -->
        <div class="dropdown mx-3">
          <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#profileMenu"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
             @if (auth()->user())
            <img class="avatar rounded-circle mr-md-2" src="{{url('/uploads/'.auth()->user()->image)}}" alt="Image description">
            <span class="d-none d-md-block">{{auth()->user()->name}}</span>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>
          </a>

          <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4" aria-labelledby="profileMenuInvoker">
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="{{route('admin.user.profile',auth()->user()->id)}}" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM6 15v2h12v-2H6zm0-8v6h6V7H6zm8 0v2h4V7h-4zm0 4v2h4v-2h-4zM8 9h2v2H8V9z" fill="rgba(98,50,50,1)"/></svg>
                 My Profile
              </a>
              
            </li>
            
            <li class="unfold-item unfold-item-has-divider">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="{{route('website.users.logout')}}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 18h2v2h12V4H6v2H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3zm2-7h7v2H6v3l-5-4 5-4v3z" fill="rgba(125,64,64,1)"/></svg>
                 Sign Out
              </a>
            </li>
          </ul>
        </div>
        <!-- End Header User Dropdown -->

      </div>
    </div>
  </nav>
</header>
<!-- End Header -->