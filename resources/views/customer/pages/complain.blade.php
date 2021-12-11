@extends('customer.master')
@section('content')



<!-- WELCOME -->
<header  style="background-image: url('/jpg/customer/CX_Consulting_Hero.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #000000;">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">  
      <div class="container my-auto"> 


      <!--container start-->
<div class="container">
<h1 style="color:#BAE73A"><b>Customer Complain</b></h1>
           <!--form start-->

<!--temporary success message start-->
{{--@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif--}}
<!--temporary success message end-->

<!--server side validation start-->
<!--@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif-->
<!--server side validation end-->


<div>
<form action="{{route('admin.site-info.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer ID</label>
            <select name="customer_id" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
</div>
                </div>
&nbsp;&nbsp;&nbsp;  &nbsp;
<div class="col-md-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Customer Name</label>
            <select name="customer_name" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
</div>
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Forward To</label>
            <select name="technician_id" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
</div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-12">
<div class="mb-3">
    <label for="" class="form-label">Complain</label>
    <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8 col-8">
<div class="form-group">
<textarea name="complain" class="form-control" required=""></textarea>
</div>
</div>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
<!--container end-->

</form>
<!--form end-->
</div>
<!--fluid-container end-->
</div>           
        
        <div class="container">
        {{--@foreach ($site_infos as $site_info)
           <!-- Address -->
           <p class="font-serif text-white-75 text-center text-md-start text-lf-start my-md-5">
                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                {{$site_info->company_address}}
              </p>
              <p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM6 19h12V9.157l-6-5.454-6 5.454V19zm6-4a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z" fill="rgba(242,155,73,1)"/></svg>
              {{$site_info->business_area}}
              </p>
              @endforeach--}}
</div>
        </div>
      </div>
    </header>

    

@endsection
    