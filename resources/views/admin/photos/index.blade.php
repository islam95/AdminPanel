@extends('layouts.admin')

@section('content')
    <h2 class="page-header">Pictures</h2>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>
            @if($photos)
                @foreach($photos as $photo)
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td><img height="50" src="{{ $photo->file }}" alt=""></td>
                        <td>{{ $photo->file }}</td>
                        <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'no date' }}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPhotosController@destroy', $photo->id]]) !!}

                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection