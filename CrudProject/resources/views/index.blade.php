@extends('layout')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Regsiterd Users</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                            <th scope="col">City</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $key => $item)
                            <tr>
                              <th scope="row">{{ $users->firstItem() +$key }}</th>
                              <td>{{ $item->name }}</td>
                              <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                              <td><a href="tel:+91 {{ $item->phone }}">{{ $item->phone }}</a></td>
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->city }}</td>
                              <td>
                                  <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-success">Edit</a>
                                  <a href="{{ route('show', ['id' => $item->id]) }}" class="btn btn-warning">View</a>
                                  <form action="{{ route('destroy', ['id' => $item->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to Delete the User?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>

                      <div class="row">
                        <div class="col-12 shadow-lg">
                          {{ $users->links() }}
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection