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
                              <th scope="row">{{ ++$key }}</th>
                              <td>{{ $item->name }}</td>
                              <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
                              <td><a href="tel:+91 {{ $item->phone }}">{{ $item->phone }}</a></td>
                              <td>{{ $item->gender }}</td>
                              <td>{{ $item->city }}</td>
                              <td>
                                  <a href="#" class="btn btn-success">Edit</a>
                                  <a href="#" class="btn btn-warning">View</a>
                                  <a href="#" class="btn btn-danger">Delete</a>
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