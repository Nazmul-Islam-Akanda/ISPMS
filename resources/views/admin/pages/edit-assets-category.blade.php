@extends('master')

@section('content')

<div class="container">
<h1>Edit Assets Category</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.assets-category.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>

<form action="{{route('admin.assets-category.update',$category->id)}}" method="POST">
@method('put')
  @csrf
<!--row start-->
<div class="row">
    <!--column start-->
    <div class="col-md-4">
  <div class="mb-3">
    <label for="" class="form-label">Category Name</label>
    <input name="name" value="{{$category->name}}" placeholder='Enter Assets Category' type="text" class="form-control" id="" required>
  </div>
  <button type="submit" class="btn btn-primary">update</button>
  </div>
<!--column end-->
</div>
<!--row end-->
</form>
</div>

</div>

@endsection