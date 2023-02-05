@extends('layouts.dashboard')

@section('content')
  <div class="w-100 d-flex align-items-center">
    <h3>service</h3>
    <a href="{{ route('dashboard.service.create') }}" class="btn btn-primary btn-sm ms-auto">Add service + </a>
  </div>
  <div class="w-100">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Thumbnail</th>
            <th>Name</th>
            <th>Youtube Url</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($service  as $service )
            <tr>
              <td>
                <img src="{{ $service->thumbnail }}" style="object-fit: cover" height="80px" width="80px" alt="">
              </td>
              <td>
                {{ $service->title }}
              </td>
              <td>
                {{ $service->video }}
              </td>
              <td>
                <div class="d-flex">
                  <a href="{{ route('dashboard.service.edit', $service->id) }}" class=" btn btn-info btn-sm">Edit</a>
                  <form action="{{ route('dashboard.service.destroy', $service->id) }}" class="ms-2" method="POST" onsubmit="return confirm('Are you sure to delete the service?')">
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
        {{ $service->links() }}
      </div>
  </div>
@endsection