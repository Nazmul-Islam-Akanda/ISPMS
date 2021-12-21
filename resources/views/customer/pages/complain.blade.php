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
        
        
        </div>
      </div>
    </header>

    

@endsection
    