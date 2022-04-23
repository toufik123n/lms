@extends('admin.master')

@section('content')

<div class="container">
<h1>Edit Website Information</h1>

<div>


<form action="{{route('admin.website-information.update',$web_info->id)}}" method="post" >
    @method('put')
 @csrf
  <div class="col-md-3">
  <div class="mb-3">
    <label for="" class="form-label">Website Name</label>
    <input name="name" value="{{$web_info->name}}" placeholder='Enter a name' type="text" class="form-control" id="" required>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>

</div>

@endsection