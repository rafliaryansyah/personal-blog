@extends('layouts.admin')


@section('title', 'Post Admin')
@push('after-style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Add Post</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation<a>.</p>

  @if(count($errors)>0)
    @foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>  		
    @endforeach
  @endif

  <!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="{{ route('post.index') }}" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="text">Back to Post</span>
      </a>
</div>
  
<div class="card-body">
    <div class="table-responsive">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="title">Title</label>
              <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
              @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="category">Category</label>
              <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" value="{{ old('category_id') }}">
                <option value="" class="text-center" selected>-- Select Category --</option>
                  @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                  @endforeach
              </select>
              @error('category_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label>Pilih Tags</label>
              <select class="form-control select2" multiple="" name="tag">
                  @foreach($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->name }}</option> 
                  @endforeach
              </select>
              @error('tag[]')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        <div class="form-group">
          <label for="">Content</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}"></textarea> 
            @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="thumbnail">Thumbnail</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile" name="image" value="{{ old('image') }}">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Add Post</button>
        </div>
        </form>
    </div>  
  </div>
</div>

</div>
@endsection

@push('after-script')

<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>


  <script>
    $('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
  </script>
  <script>
    $(document).ready(function() {
      $('.select2').select2();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endpush