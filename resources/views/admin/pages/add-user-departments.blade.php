@extends('master')

@section('content')
<div class="container">
<h1>Add Departments</h1>

<div>
<form action="{{route('admin.user-departments.store')}}" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Department Name</label>
    <input name="name" placeholder='Enter Department Name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>

@endsection