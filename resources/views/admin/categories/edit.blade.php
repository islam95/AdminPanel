@extends('layouts.admin')

@section('content')
    <h2 class="page-header">Categories</h2>

    <div class="table-responsive col-sm-6">

        {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group">
            {{ Form::label('name', 'Category name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary col-sm-2']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete', ['class' => 'btn btn-danger col-sm-3 pull-right']) !!}
        </div>
        {!! Form::close() !!}

    </div>

    <div class="table-responsive col-sm-6">

    </div>


@endsection