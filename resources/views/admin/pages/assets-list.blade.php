@extends('master')

@section('content')
<div class="container">
<h1>Assets List</h1>
</div>

<a href="{{route('admin.assets.add')}}" class="btn btn-primary">Add Assets</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Assets Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Assigned User</th>
      <th scope="col">User ID</th>
      <th scope="col">User Department</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>

    </tr>
  </thead>

  <tbody>
    {{--@dd($assets)--}}
    @foreach ($assets as $key=>$asset)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$asset->assetsCategory->name}} </td>
      <td> {{$asset->asset_name}} </td>
      <td> {{$asset->quantity}} </td>
      <td> {{$asset->user->name}} </td>
      <td> {{$asset->user->user_id}} </td>
      <td> {{$asset->user->department->name}} </td>
      <td>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg>
  </td>
  <td><a Style=background-color:#0e0561>{{$asset->status}}</a></td>
</tr>
@endforeach
</tbody>
@endsection