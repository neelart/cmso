@extends('layouts.admin')

@section('title', 'Manage Pages')

@section('content')
    <div class="container">
        <h1>Manage Pages</h1>

        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary" style="margin-bottom: 1rem; display: inline-block;">Create New Page</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->created_at->format('Y-m-d H:i:s') }}</td>
                        <td>{{ $page->updated_at->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm">Edit</a>
                            <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No pages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Basic pagination styling will be handled by Tailwind if/when integrated, or via custom CSS.
             For now, Laravel's default pagination will be used which is functional but may not match the theme.
             The admin.css provides some basic styling for .pagination-links a and span. --}}
        <div class="pagination-links">
            {{ $pages->links() }}
        </div>
    </div>
@endsection
