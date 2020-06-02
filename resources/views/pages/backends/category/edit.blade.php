@extends('layouts.admin')

@section('title', 'Category Admin')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Category</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation<a>.</p>

  <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="#" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="text">Back to Category</span>
      </a>
</div>
  
<div class="card-body">
    <div class="table-responsive">
        <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Category</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
          </div>
          <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Update Category</button>
          </div>
        </form>
    </div>
  </div>
</div>

</div>
@endsection