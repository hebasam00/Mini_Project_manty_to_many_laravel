@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>
        </div>

        <div>
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <label for="tags">Select Tags:</label>
            <select name="tags[]" id="tags" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Create Post</button>
    </form>
@endsection
