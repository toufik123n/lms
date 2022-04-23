@extends('admin.master')

@section('content')

<div class="container">
<h1>Edit Designations</h1>

<div>



<form action="{{route('admin.designations.update',$designation->id)}}" method="post">
    @method('put')
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Designation Name</label>
    <input name="name" value="{{$designation->name}}" placeholder='Enter designation name' type="text" class="form-control" id="" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Designation Description</label>
    <input name="description" value="{{$designation->description}}"  placeholder='Somthing about designation' type="text" class="form-control" id="" >
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>

</div>

@endsection