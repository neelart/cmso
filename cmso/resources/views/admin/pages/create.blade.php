@extends('layouts.admin')

@section('title', 'Create New Page')

@section('content')
    <div class="container">
        <h1>Create New Page</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops! Something went wrong.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.pages.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div>
                <label for="slug">Slug:</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug') }}" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            </div>
            <div>
                <button type="submit" class="btn">Create Page</button>
            </div>
        </form>

        <a href="{{ route('admin.pages.index') }}" style="display: block; margin-top: 1rem;">Back to Pages List</a>
    </div>
@endsection
