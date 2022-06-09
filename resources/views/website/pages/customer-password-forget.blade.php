@extends('website.master')
@section('content')



<!-- WELCOME -->
<header  style="background-image: url('/jpg/website/bg1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: #000000;">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">  
      <div class="container my-auto"> 
           <!--form start-->
<form action="{{route('website.customers.forget.password.post')}}" method='post' >
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
@if($errors->any())
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">{{$error}}</div>
   @endforeach
   @endif

   @if(session()->has('msg'))
<p class="aler alert-success"><b>{{session()->get('msg')}}</b></p>
@endif
<!-- //msg -->
<h1 style="color:white;"><b>Customer Forget Password</b></h1>
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
    <label for="" class="form-label">Customer Email</label>
    <input name="email" placeholder='Enter Customer Valid Email' type="string" class="form-control" id="">
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
<button type="submit" class="btn btn-primary">Submit to get reset link</button>
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
        
        
        </div>
      </div>
    </header>


   

@endsection
    