@extends('layouts.admin')


@section('content')

    <h2 class="page-header">Update user</h2>

    <div class="row">
        <div class="col-sm-3">
            <img src="{{ $user->photo ? $user->photo->file : '/images/no_image.png' }}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => 'true']) !!}
                <div class="form-group">
                    {{ Form::label('name', 'Full name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('role_id', 'Role:') }}
                    {{ Form::select('role_id', $roles, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('isActive', 'Status:') }}
                    {{ Form::select('isActive', array(0 => 'Not Active', 1 => 'Active'), null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('photo_id', 'Photo:') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary col-sm-2']) !!}
                </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete user', ['class' => 'btn btn-danger col-sm-3 pull-right']) !!}
                </div>
            {!! Form::close() !!}


        </div>
    </div>

    @include('includes.form_errors')

@endsection