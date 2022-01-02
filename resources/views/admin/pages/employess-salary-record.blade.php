@extends('master')

@section('content')
<div class="container">
<h1>Employees Salary Record</h1>
</div>

<a href="{{route('admin.employees-salary.add')}}" class="btn btn-primary">Add Employees Salary Information</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Employee Department</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Advance</th>
      <th scope="col">Bonus</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

  <tbody>
    {{--@dd($employeeSalaries)--}}
    @foreach ($employeeSalaries as $key=>$employeeSalary)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$employeeSalary->user->name}} </td>
      <td> {{$employeeSalary->user->user_id}} </td>
      <td> {{$employeeSalary->user->department->name}} </td>
      <td> {{$employeeSalary->paid}} </td>
      <td> {{$employeeSalary->advance}} </td>
      <td> {{$employeeSalary->bonus}} </td>
      <td> {{$employeeSalary->date}} </td>
      <td>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" fill="rgba(149,161,6,1)"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg>
  </td>
  <td><a Style=background-color:#0e0561>{{$employeeSalary->status}}</a></td>
</tr>
@endforeach
</tbody>
@endsection