@extends('layouts.admin')

@section('content')
    <h2 class="page-header">Users</h2>

    @if(session()->has('deleted_user'))
        <p class="alert alert-danger">
            {{ session('deleted_user') }}
        </p>
    @endif

    @if(session()->has('updated_user'))
        <p class="alert alert-success">
            {{ session('updated_user') }}
        </p>
    @endif

    @if(session()->has('created_user'))
        <p class="alert alert-success">
            {{ session('created_user') }}
        </p>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>

            @if($users)
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><img height="45px" src="{{ $user->photo ? $user->photo->file : '/images/no_image.png' }}"></td>
                    <td><a href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->isActive == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>

@endsection