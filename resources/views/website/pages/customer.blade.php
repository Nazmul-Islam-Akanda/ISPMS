@extends('website.master')
@section('content')



<!-- WELCOME -->
<header  style="background-image: url('/jpg/website/bg1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #000000;">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">  
      <div class="container my-auto"> 
           <!--form start-->
<form action="{{route('admin.users.store')}}" method='post' >
    @csrf
<!--fluid-container start-->
<div class="container-fluid">

<!--row start-->
<div class="row">
    <!--column start-->
<div class="col">
</div>

<div class="col">
<div class="mb-3">
<h1 style="color:white;"><b>Customer Login</b></h1>
  </div>
</div>

<div class="col">
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
<div class="col">
</div>

<div class="col">
<div class="mb-3">
    <label for="" class="form-label">Customer ID</label>
    <input name="customer_id" placeholder='Enter customer ID' type="string" class="form-control" id="">
  </div>
</div>

<div class="col">
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
<div class="col">
</div>

<div class="col">
<div class="mb-3">
    <label for="" class="form-label">Conatct Number</label>
    <input name="contact_no" placeholder='Enter customer phone number' type="string" class="form-control" id="">
  </div>
</div>

<div class="col">
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
<div class="col">
</div>

<div class="col">
<div class="mb-3">
<button type="submit" class="btn btn-primary">Log In</button>
  </div>
</div>

<div class="col">
</div>
<!--column end-->
</div>
<!--row end-->

</form>
<!--form end-->
</div>
<!--fluid-container end-->
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
    