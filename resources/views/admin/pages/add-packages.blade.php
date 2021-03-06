@extends('master')

@section('content')

<div class="container">
<h1>Add Packages</h1>

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

<form action="{{route('admin.packages.store')}}" method="POST">
  @csrf
  <!--row start-->
<div class="row">
    <!--column start-->
<div class="col-md-4">
  <div class="mb-3">
    <label for="" class="form-label">Package Name</label>
    <input name="name" placeholder='Enter Package Name' type="text" class="form-control" id="" required>
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
    <input name="price" placeholder='Enter Package Amount' type="number" class="form-control" id="" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
<!--column end-->
</div>
<!--row end-->
</form>
</div>

</div>

@endsection