@extends('layouts.admin')

@section('content')
    <h2 class="page-header">Categories</h2>

    <div class="col-sm-6">

        {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store']) !!}
            <div class="form-group">
                {{ Form::label('name', 'Category name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

    </div>

    <div class="table-responsive col-sm-6">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                        <td>{{ $category->created_at ? $category->created_at->diffForHumans() : 'no date' }}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection