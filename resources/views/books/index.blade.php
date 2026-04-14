@extends('layouts.app')

@section('content')

<h2>Books List</h2>

<form method="GET" action="{{ route('books.index') }}" class="mb-3">

    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Search title or author"
           class="form-control mb-2">

    <select name="genre" class="form-control mb-2">
        <option value="">All Genres</option>

        <option value="Fiction" {{ request('genre') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
        <option value="Sci-Fi" {{ request('genre') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
        <option value="Romance" {{ request('genre') == 'Romance' ? 'selected' : '' }}>Romance</option>
        <option value="Mystery" {{ request('genre') == 'Mystery' ? 'selected' : '' }}>Mystery</option>
        <option value="Horror" {{ request('genre') == 'Horror' ? 'selected' : '' }}>Horror</option>
        <option value="Fantasy" {{ request('genre') == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
        <option value="Thriller" {{ request('genre') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
        <option value="Adventure" {{ request('genre') == 'Adventure' ? 'selected' : '' }}>Adventure</option>
        <option value="Drama" {{ request('genre') == 'Drama' ? 'selected' : '' }}>Drama</option>
        <option value="Historical" {{ request('genre') == 'Historical' ? 'selected' : '' }}>Historical</option>
        <option value="Biography" {{ request('genre') == 'Biography' ? 'selected' : '' }}>Biography</option>
        <option value="Educational" {{ request('genre') == 'Educational' ? 'selected' : '' }}>Educational</option>
        <option value="Self-Help" {{ request('genre') == 'Self-Help' ? 'selected' : '' }}>Self-Help</option>
        <option value="Technology" {{ request('genre') == 'Technology' ? 'selected' : '' }}>Technology</option>
    </select>

    <button class="btn btn-primary">Search</button>
</form>

<table class="table table-bordered">
<tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Available</th>
    <th>Actions</th>
</tr>

@forelse($books as $book)
<tr>
    <td>{{ $book->title }}</td>
    <td>{{ $book->author }}</td>
    <td>{{ $book->genre }}</td>
    <td>{{ $book->price }}</td>
    <td>{{ $book->is_available ? 'Yes' : 'No' }}</td>
    <td>
        <a class="btn btn-info btn-sm" href="{{ route('books.show', $book->id) }}">View</a>
        <a class="btn btn-warning btn-sm" href="{{ route('books.edit', $book->id) }}">Edit</a>

        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="6" class="text-center">No books found</td>
</tr>
@endforelse

</table>

@endsection