@extends('master')

@section('content')
<div class="container">
<h1>Mobile Banking List</h1>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-xs-6">
<a href="{{route('admin.mobile-banking.add')}}" class="btn btn-primary">Add Mobile Banking</a>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
  <div class="col-xs-6">
  @if(session()->get('msg'))
<p class="alert alert-success" style="color:red">
  <b>{{session()->get('msg')}}</b>
</p>
@endif
</div>
</div>
</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mobile Banking Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  {{--@dd($mobile_bankings)--}}
    @foreach ($mobile_bankings as $key=>$mobile_banking)
    <tr>
      <th> {{$key+1}} </th>
      <td> {{$mobile_banking->name}} </td>
    <td>
    <a href="{{route('admin.mobile-banking.edit',$mobile_banking->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-2 2H5v14h14V9.243l2-2V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z" fill="rgba(230,126,34,1)"/></svg></a>
    <a href="{{route('admin.mobile-banking.delete',$mobile_banking->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" fill="rgba(231,76,60,1)"/></svg></a>
  </td>

    
    </tr>
   @endforeach
  
  </tbody>
</table>

@endsection