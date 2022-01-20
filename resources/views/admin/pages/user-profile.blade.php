@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1 style="color:#89520F"><b>Welcome to your profile</b></h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

<!--server side validation start-->
@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif
<!--server side validation end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('dashboard')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>


<div>
<form action="{{route('admin.user.profile-update',auth()->user()->id)}}" method='post' enctype="multipart/form-data">
  @method('put')
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<p><img src="{{url('/uploads/'.$user->image)}}" width="100px" alt="Picture"> </p>
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Full Name</label>
    <input name="name" value="{{$user->name}}" placeholder='Enter User Name' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Contact No.</label>
    <input name="contact_no" value="0{{$user->contact_no}}" placeholder='Enter Mobile Number' type="number" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" value="{{$user->email}}" placeholder='Enter your email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
<!--column start-->
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input name="password" value="" placeholder='If Customer Enter Contact No.' type="password" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<label for="" class="form-label">Image</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
</div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">

<!--column end-->
</div> 
<!--row end-->

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<!--fluid-container end-->

</div>
<!--container end-->
@endsection