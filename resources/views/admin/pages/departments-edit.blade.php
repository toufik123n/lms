@extends('admin.master')

@section('content')

<div class="container">
<h1>Edit Departments</h1>

<div>



<form action="{{route('admin.departments.update',$department->id)}}" method="post">
    @method('put')
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Department Name</label>
    <input name="name" value="{{$department->name}}" placeholder='Enter department name' type="text" class="form-control" id="" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Department Description</label>
    <input name="description" value="{{$department->description}}" placeholder='Somthing about department' type="text" class="form-control" id="" >
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>

</div>

@endsection