@extends('layouts.admin')



@section('title', 'Post Admin')
@push('after-style')
    <link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
@endpush
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Title Fitur</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ route('post.create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add Title</span>
      </a>
      <a href="{{ route('post.showDelete') }}" class="btn btn-warning btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-recycle"></i>
        </span>
        <span class="text">Delete Post History</span>
      </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Post Name</th>
              <th>Category</th>
              <th>List Tags</th>
              <th>Author</th>
              <th>Thumbnail</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post => $result)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $result->title }}</td>
              <td>{{ $result->category->name }}</td>
              <td>
                @foreach ($result->tags as $tag)
                  <ul>
                    <h6>
                      <span class="badge badge-info">{{ $tag->name }}</span>
                    </h6>
                  </ul>
                @endforeach
              </td>
              <td><strong>{{ $result->users->name }}</strong></td>
              <td><img src="{{ asset( $result->image ) }}" class="img-fluid" width="100"></td>
              <td>
                <a href="#" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-search"></i>
                    </span>
                  </a>
                <a href="{{ route('post.edit', $result->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pen"></i>
                    </span>
                </a>
                <form action="{{ route('post.destroy', $result->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger btn-icon-split btn-sm ">
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


@push('after-script')
  <script>
    $(document).ready( function () {
      $('.table-bordered').DataTable();
    });
  </script>
@endpush