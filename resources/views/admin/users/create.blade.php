@extends('layouts.admin')


@section('content')

<h2 class="page-header">Create users</h2>

{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => 'true']) !!}

    <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('name', 'Full name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('role_id', 'Role:') }}
            {{ Form::select('role_id', ['' => 'Choose a role'] + $roles, null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('isActive', 'Status:') }}
            {{ Form::select('isActive', array(0 => 'Not Active', 1 => 'Active'), 0, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <div class="form-group col-lg-6 col-md-6">
            {{ Form::label('photo_id', 'Photo:') }}
            {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

@include('includes.form_errors')

@endsection