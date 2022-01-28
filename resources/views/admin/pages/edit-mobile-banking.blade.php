@extends('master')

@section('content')

<div class="container">
<h1>Edit Mobile Banking</h1>

<!--temporary success message start-->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<!--temporary success message end-->

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<a href="{{route('admin.mobile-banking.list')}}" class="btn" style="background-color:lightgray; border-radius:10px">Back</a>

<div>

<form action="{{route('admin.mobile-banking.update',$mobile_banking->id)}}" method="POST">
    @method('put')
  @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Mobile Banking Name</label>
    <input name="name" value="{{$mobile_banking->name}}" placeholder='Enter Mobile Banking Name' type="text" class="form-control" id="" required>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>

</div>

@endsection