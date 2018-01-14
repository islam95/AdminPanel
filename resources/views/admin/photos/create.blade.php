@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" />
@endsection

@section('content')
    <h2 class="page-header">Upload a picture</h2>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminPhotosController@store', 'class' => 'dropzone']) !!}

    {!! Form::close() !!}

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
@endsection
