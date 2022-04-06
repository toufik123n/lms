@extends('admin.master')

@section('content')

<div class="container">
<h1>Add Departments</h1>

<div>

<!-- error message -->
@if($errors->any())
<div class='alert alert-danger' role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<!-- error message -->

<form action="{{route('admin.departments.store')}}" method="post">
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Department Name</label>
    <input name="name" placeholder='Enter department name' type="text" class="form-control" id="" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Department Description</label>
    <input name="description" placeholder='Somthing about department' type="text" class="form-control" id="" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

</div>

@endsection