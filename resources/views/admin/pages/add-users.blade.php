@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Users</h1>

<div>
<form action="{{route('admin.users.store')}}" method='post'>
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-xs-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input name="name" placeholder='Enter User Name' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact No.</label>
    <input name="contact_no" placeholder='Enter Mobile Number' type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
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
<div class="col-xs-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User ID:</label>
    <input name="user_id" placeholder='Enter user id' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password:</label>
    <input name="password" placeholder='Enter your password' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-1">
<div class="form-group">
            <label for="exampleFormControlSelect1">Department</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
            </select>
    </div>

<div class="col-xs-4">
<div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="picture" placeholder="Enter picture" type="file" class="form-control" id="">
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