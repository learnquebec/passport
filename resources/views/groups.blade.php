@extends('layouts.app')

@section('content')
<div class="container">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h2>Groups</h2>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th></th>
                            <th scope="col">Group Name</th>
                            <th scope="col">Creation Date</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="/group/{{ $group->id }}" class="btn btn-primary" type="submit">View/edit</a></td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->created_at }}</td>
                            <td><button class="btn btn-danger" type="submit">Delete</button></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      <td><a href="/creategroup" class="btn btn-primary" type="submit">Create Group</a></td>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
