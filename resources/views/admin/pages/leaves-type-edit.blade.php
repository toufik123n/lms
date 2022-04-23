@extends('admin.master')

@section('content')

<div class="container">
<h1>Edit Leaves Type</h1>

<div>



<form action="{{route('admin.leaves-type.update',$leaves_type->id)}}" method="post">
    @method('put')
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Leaves Type Name</label>
    <input name="name" value="{{$leaves_type->name}}" placeholder='Enter Leaves Type name' type="text" class="form-control" id="" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Leaves Type Description</label>
    <input name="description" value="{{$leaves_type->description}}" placeholder='Somthing about this leaves' type="text" class="form-control" id="" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Leaves Credit Per Month</label>
    <input name="credit" value="{{$leaves_type->credit}}" placeholder='Total credit of leaves' type="text" class="form-control" id="" required>
  </div>

  <div class="mb-3">
<div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option {{ ($leaves_type->status) == 'Active' ? 'selected' : '' }}  value="Active">Active</option>
            <option {{ ($leaves_type->status) == 'Unavailable' ? 'selected' : '' }}  value="Unavailable">Unavailable</option>
            </select>
    </div>
</div>

  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>

</div>

@endsection