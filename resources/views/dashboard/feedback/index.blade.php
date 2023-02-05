@extends('layouts.dashboard')

@section('content')
  <div class="w-100 d-flex align-items-center">
    <h3>Feedbacks</h3>
    <a href="{{ route('dashboard.feedback.create') }}" class="btn btn-primary btn-sm ms-auto">Add Feedback + </a>
  </div>
  <div class="w-100">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Avatar</th>
            <th>Name</th>
            <th>Role</th>
            <th>Feedback</th>
            <th>Rate</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($feedbacks  as $feedback )
            <tr>
              <td>
                <img src="{{ $feedback->avatar }}" style="object-fit: cover" height="80px" width="80px" alt="">
              </td>
              <td>
                {{ $feedback->user_name }}
              </td>
              <td>
                {{ $feedback->user_role }}
              </td>
              <td>
                {{ $feedback->content }}
              </td>
              <td>
                {{ $feedback->rate }}
              </td>
              <td>
                <div class="d-flex">
                  <a href="{{ route('dashboard.feedback.edit', $feedback->id) }}" class=" btn btn-info btn-sm">Edit</a>
                  <form action="{{ route('dashboard.feedback.destroy', $feedback->id) }}" class="ms-2" method="POST" onsubmit="return confirm('Are you sure to delete the feedback?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                 
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="mt-3">
        {{ $feedbacks->links() }}
      </div>
  </div>
@endsection