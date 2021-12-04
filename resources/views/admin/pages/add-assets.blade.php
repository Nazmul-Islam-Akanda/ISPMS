@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Add Assets</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="{{route('admin.assets.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.users.store')}}" method='post' >
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-xs-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
<div class="mb-3">
    <label for="" class="form-label">Asset Name</label>
    <input name="asset_name" placeholder='Enter asset name' type="string" class="form-control" id="">
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity</label>
    <input name="quantity" placeholder='number of assets' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
<!--column start-->
<div class="col-xs-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">User Department</label>
            <select name="department" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-4">
<div class="form-group">
            <label for="exampleFormControlSelect1">Assigned User ID</label>
            <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                {{--@foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach--}}
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-xs-1">
<div class="mb-3">
    <label for="" class="form-label">Assigned User</label>
    <input name="user" placeholder='Assigned user' type="string" class="form-control" id="">
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

</div>
<!--container end-->
@endsection