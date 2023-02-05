@extends('layouts.dashboard')

@section('content')
  <div class="w-100">
    <div class="card">
      <div class="card-header bg-white">
        <h4 class="mb-0">Create New Course</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('dashboard.course.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="title" class="col-form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ old('title') }}" placeholder="Title here...">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="price" class="col-form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror " id="price" name="price" value="{{ old('price') }}" placeholder="1000">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="like" class="col-form-label">Like</label>
            <input type="number" class="form-control @error('like') is-invalid @enderror " id="like" name="like" value="{{ old('like') }}" placeholder="1212">
            @error('like')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="video" class="col-form-label">Youtube Url</label>
            <input type="text" class="form-control @error('video') is-invalid @enderror " id="video" name="video" value="{{ old('video') }}" placeholder="https://youtube.com/oiuygh">
            @error('video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="thumbnailk" class="col-form-label">Thumbnail</label>
            <input type="file" class="form-control @error('thumbnail') is-invalid @enderror " accept="image/*" id="thumbnail" name="thumbnail">
            @error('thumbnail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <textarea  row="4" class="form-control @error('like') is-invalid @enderror " id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          
          <div class="w-100 d-flex mt-4">
            <button class="btn btn-primary px-3 ms-auto"> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection