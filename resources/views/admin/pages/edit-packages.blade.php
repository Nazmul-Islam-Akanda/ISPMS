@extends('master')

@section('content')

<div class="container">
<h1>Edit Packages</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.packages.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>

<form action="{{route('admin.packages.update',$package->id)}}" method="POST">
    @method('put')
  @csrf
  <!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
  <div class="mb-3">
    <label for="" class="form-label">Package Name</label>
    <input name="name" value="{{$package->name}}" placeholder='Enter Package Name' type="text" class="form-control" id="" required>
  </div>
  </div>
<!--column end-->
</div>
<!--row end-->

<!--row start-->
<div class="row">
    <!--column start-->
  <div class="col-md-4">
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input name="price" value="{{$package->price}}" placeholder='Enter Package Amount' type="number" class="form-control" id="" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
<!--column end-->
</div>
<!--row end-->
</form>
</div>

</div>

@endsection