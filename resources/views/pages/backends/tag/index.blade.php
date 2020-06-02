@extends('layouts.admin')

@section('title', 'Tag Admin')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Title Tag</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ route('tag.create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add Tag</span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Tag Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tags as $tag)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $tag->name }}</td>
              <td>
                <a href="" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pen"></i>
                    </span>
                  </a>
                  <form action="" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-icon-split  btn-sm" type="submit">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                    </button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection