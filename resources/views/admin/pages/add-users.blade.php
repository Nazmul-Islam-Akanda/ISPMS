@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Users</h1>

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

<a href="{{route('admin.users.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.users.store')}}" method='post' enctype="multipart/form-data">
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Full Name</label>
    <input name="name" placeholder='Enter User Name' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Contact No.</label>
    <input name="contact_no" placeholder='Enter Mobile Number' type="number" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" placeholder='Enter your email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    <label for="" class="form-label">User ID:</label>
    <input name="user_id" placeholder='Enter user id' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input name="password" placeholder='If Customer Enter Contact No.' type="password" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Employee Department</label>
            <select name="department" placeholder='Department' class="form-control" id="exampleFormControlSelect1">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                    <option></option>
            </select>
    </div>

<div class="col-xs-3">
<div class="mb-3">
            <label for="" class="form-label">Role</label>
            <select name="role" placeholder='' class="form-control" id="exampleFormControlSelect1">
                    <option>Technician</option>
                    <option>Accountant</option>
                    <option>Customer</option>
                    <option>Admin</option>
            </select>
        </div>
<div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
</div>
</div>
<!--column end-->
</div> 
<!--row end-->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!--fluid-container end-->

</div>
<!--container end-->
@endsection