@extends('layouts.admin')

@section('title', 'Tag Admin')
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Tag</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation<a>.</p>

  <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{ route('tag.index') }}" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="text">Back to Tag</span>
      </a>
</div>
  
<div class="card-body">
    <div class="table-responsive">
        <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Tag</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Add Tag</button>
          </div>
        </form>
    </div>
  </div>
</div>

</div>
@endsection