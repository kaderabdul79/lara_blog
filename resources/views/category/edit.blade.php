@extends('master')

@section('content')
<h2>Edit Category</h2>
 <form action="{{ route('categories.update', $category->id ) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
    
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" id=""  class="form-control">
        <option value="0">Inactive</option>
        <option value="1">Active</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection