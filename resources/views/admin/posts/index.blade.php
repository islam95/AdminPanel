@extends('layouts.admin')

@section('content')
    <h2 class="page-header">Posts</h2>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Category</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img height="45px" src="{{ $post->photo ? $post->photo->file : '/images/no_image.png' }}"></td>
                    <td>{{ $post->user->name }}</td>
                    <td><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ str_limit($post->body, 50) }}</td>
                    <td>{{ $post->category ? $post->category->name : 'None' }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection