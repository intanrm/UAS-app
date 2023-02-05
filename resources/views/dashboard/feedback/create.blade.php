@extends('layouts.dashboard')

@section('content')
  <div class="w-100">
    <div class="card">
      <div class="card-header bg-white">
        <h4 class="mb-0">Create New Feedback</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('dashboard.feedback.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="user_name" class="col-form-label">User Name</label>
            <input type="text" class="form-control @error('user_name') is-invalid @enderror " id="user_name" name="user_name" value="{{ old('user_name') }}" placeholder="Username here...">
            @error('user_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="user_role" class="col-form-label">Role</label>
            <input type="text" class="form-control @error('user_role') is-invalid @enderror " id="user_role" name="user_role" value="{{ old('user_role') }}" placeholder="Ux Designer">
            @error('user_role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="rate" class="col-form-label">Rate</label>
            <input type="number"  class="form-control @error('rate') is-invalid @enderror " id="rate" name="rate" value="{{ old('rate') }}" placeholder="3">
            @error('rate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="avatar" class="col-form-label">Avatar</label>
            <input type="file" class="form-control @error('avatar') is-invalid @enderror " accept="image/*" id="avatar" name="avatar">
            @error('avatar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="content" class="col-form-label">Feedback</label>
            <textarea  row="4" class="form-control @error('feedback') is-invalid @enderror " id="content" name="content" placeholder="content">{{ old('content') }}</textarea>
            @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          
          <div class="w-100 d-flex mt-4">
            <button class="btn btn-primary px-3 ms-auto">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection