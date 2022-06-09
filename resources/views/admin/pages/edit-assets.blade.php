@extends('master')

@section('content')
<!--container start-->
<div class="container">
<h1>Edit Assets</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->


&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.assets.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>
<form action="{{route('admin.assets.update',$asset->id)}}" method='post' >
@method('put')
    @csrf
<!--fluid-container start-->
<div class="container-fluid">
<!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1">
            @foreach ($categories as $category)
                    <option
                    @if($category->id==$asset->category_id)
                    selected
                    @endif
                    value="{{$category->id}}"> {{$category->name}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="" class="form-label">Asset Name</label>
    <input name="asset_name" value="{{$asset->asset_name}}" placeholder='Enter asset name' type="string" class="form-control" id="" required>
  </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity</label>
    <input name="quantity" value="{{$asset->quantity}}" placeholder='number of assets' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
</div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
<!--column start-->
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Assigned User ID</label>
            <select name="user_id" class="form-control" id="exampleFormControlSelect1">
            @foreach ($users as $user)
                    <option
                    @if($user->id==$asset->user_id)
                    selected
                    @endif
                    value="{{$user->id}}"> {{$user->user_id}} </option>
                    @endforeach
            </select>
    </div>
</div>
&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
<div class="col-md-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($asset->status) == 'Active' ? 'selected' : '' }}  value="Active">Active</option>
            <option {{ ($asset->status) == 'Inactive' ? 'selected' : '' }}  value="Inactive">Inactive</option>
            </select>
    </div>
</div>

<!--column end-->
</div> 
<!--row end-->

  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
<!--fluid-container end-->
                </div>

</div>
<!--container end-->
@endsection