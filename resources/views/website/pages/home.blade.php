@extends('website.master')
@section('content')



<!-- WELCOME -->
<header  style="background-image: url('/jpg/website/bg1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #000000;">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Preheading -->
              <h6 class="text-xs text-white-75">
                <span class="text-primary">ISP</span> / Internet
              </h6>

              <!-- Heading -->
              @foreach ($site_infos as $site_info)
              <h1 class="display-3 text-white mb-4">
              <img src="{{url('/uploads/'.$site_info->logo)}}" width="90px" alt="Company Logo">
              {{$site_info->company_name}}
              </h1>
              @endforeach

            </div>
          </div>
        </div>
        <div class="container">
        @foreach ($site_infos as $site_info)
           <!-- Address -->
           <p class="font-serif text-white-75 text-center text-md-start text-lf-start my-md-5">
                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                {{$site_info->company_address}}
              </p>
              <p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM6 19h12V9.157l-6-5.454-6 5.454V19zm6-4a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" fill="rgba(242,155,73,1)"/></svg>
              {{$site_info->business_area}}
              </p>
              @endforeach
        </div>
      </div>
    </header>



   

    <!-- Packages -->
    <section class="py-7 py-md-9 overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              <b>Our <em>Packages</em> List</b>
            </h2>

           <h> <a class="nav-link" href="{{route('cart.get')}}" style="color:blueviolet">Cart({{session()->has('cart') ? count(session()->get('cart')) : 0}})</a>  </h> 
          
           @if(session()->has('msg'))
           <p class="alert alert-danger"><b>{{session()->get('msg')}}</b></p>
           @endif
          </div>
        </div>

        <div class="row">
        @foreach ($packages as $package)
          <div class="col-2">
            <!-- Slider -->
            <div class="flickity-viewport-visible" data-flickity='{"cellAlign": "left", "contain": true, "imagesLoaded": true, "pageDots": false}'>
              <div class="w-100 px-2" style="max-width: 320px;">
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 style="font-size:50px;" class="mb-0">{{$package->name}}*</h5>
                      </div>
                    </div>
                    <!-- Text -->
                    <p style="color:tomato;" class="mb-0">
                      BDT {{$package->price}}
                    </p>
                    <a href="{{route('cart.add',$package->id)}}" style="color:blueviolet">Add to cart</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </section>
@endsection
    