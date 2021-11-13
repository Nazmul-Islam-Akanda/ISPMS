@extends('master')

@section('content')
<h1>User Departments List</h1>
<br>
<div class="row">
<div class="col-xs-6">
  
</div>
  <div class="col-xs-6">
  <a href="{{route('user-departments.add')}}" class="btn btn-success">Add Department</a>
</div>
</div>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Department Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Technical</td>
    
    </tr>
  
  </tbody>
</table>

@endsection