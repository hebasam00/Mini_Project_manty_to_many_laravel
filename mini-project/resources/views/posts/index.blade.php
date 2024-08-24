@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            @if($post->image_path)
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="Image for {{ $post->title }}">
            @endif
            <p>Tags: 
                @foreach($post->tags as $tag)
                    {{ $tag->name }} 
                @endforeach
            </p>
        </div>
    @endforeach
@endsection
@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            @if($post->image_path)
                <img src="{{ asset('storage/' . $post->image_path) }}" alt="Image for {{ $post->title }}">
            @endif
            <p>Tags: 
                @foreach($post->tags as $tag)
                    {{ $tag->name }} 
                @endforeach
            </p>
        </div>
    @endforeach
@endsection
