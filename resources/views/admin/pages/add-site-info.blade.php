@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Site Information</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
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

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.site.info')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.site-info.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="form-label">Company Name</label>
    <input name="name" placeholder='Enter Company Name' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="form-label">Contact Information</label>
    <input name="contact_info" placeholder='Enter contact information' type="string" class="form-control" id="">
  </div>
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Company Email</label>
    <input name="email" placeholder='Enter company email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-4">
<div class="mb-3">
    <label for="" class="form-label">Company Address</label>
    <input name="address" placeholder='Enter company address' type="string" class="form-control" id="">
  </div>
</div>
<!--column end-->
</div>
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
<div class="mb-3">
    <label for="" class="form-label">Business Area</label>
    <input name="business_area" placeholder='Enter area of business' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-4">
    <div class="mb-3">
        <label for="" class="form-label">Mobile Banking Information</label>
        <input name="mobile_banking_info" placeholder='Enter information for mobile banking' type="string" class="form-control" id="">
      </div>
</div>
<!--column end-->
</div> 
<!--row end-->


<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
    <div class="mb-3">
        <label for="" class="form-label">Opening Hours</label>
        <input name="opening_hours" placeholder='Enter when company opens' type="string" class="form-control" id="">
      </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
      <div class="col-md-4">
<div class="mb-3">
            <label for="" class="form-label">Company Logo</label>
            <input name="image" placeholder="Enter logo" type="file" class="form-control" id="">
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
@endsection