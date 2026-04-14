@extends('layouts.app')

@section('content')

<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}" class="form-control mb-2">

    <input type="text" name="author" value="{{ $book->author }}" class="form-control mb-2">

    <textarea name="description" class="form-control mb-2">{{ $book->description }}</textarea>


    <select name="genre" class="form-control mb-2">
        <option value="Fiction" {{ $book->genre == 'Fiction' ? 'selected' : '' }}>Fiction</option>
        <option value="Sci-Fi" {{ $book->genre == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
        <option value="Romance" {{ $book->genre == 'Romance' ? 'selected' : '' }}>Romance</option>
        <option value="Mystery" {{ $book->genre == 'Mystery' ? 'selected' : '' }}>Mystery</option>
        <option value="Horror" {{ $book->genre == 'Horror' ? 'selected' : '' }}>Horror</option>
        <option value="Fantasy" {{ $book->genre == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
        <option value="Thriller" {{ $book->genre == 'Thriller' ? 'selected' : '' }}>Thriller</option>
        <option value="Adventure" {{ $book->genre == 'Adventure' ? 'selected' : '' }}>Adventure</option>
        <option value="Drama" {{ $book->genre == 'Drama' ? 'selected' : '' }}>Drama</option>
        <option value="Historical" {{ $book->genre == 'Historical' ? 'selected' : '' }}>Historical</option>
        <option value="Biography" {{ $book->genre == 'Biography' ? 'selected' : '' }}>Biography</option>
        <option value="Educational" {{ $book->genre == 'Educational' ? 'selected' : '' }}>Educational</option>
        <option value="Self-Help" {{ $book->genre == 'Self-Help' ? 'selected' : '' }}>Self-Help</option>
        <option value="Technology" {{ $book->genre == 'Technology' ? 'selected' : '' }}>Technology</option>
    </select>


    <input type="number" name="published_year" value="{{ $book->published_year }}" class="form-control mb-2">

    <input type="text" name="isbn" value="{{ $book->isbn }}" class="form-control mb-2">

    <input type="number" name="pages" value="{{ $book->pages }}" class="form-control mb-2">

    <input type="text" name="language" value="{{ $book->language }}" class="form-control mb-2">

    <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control mb-2">

    <input type="number" step="0.01" name="price" value="{{ $book->price }}" class="form-control mb-2">

    @if($book->cover_image)
        <div class="mb-2">
            <img src="{{ asset('storage/' . $book->cover_image) }}" width="100">
        </div>
    @endif

    <div class="mb-2">
        <label>Change Cover Image</label>
        <input type="file" name="cover_image" class="form-control">
    </div>

    <label>
        <input type="checkbox" name="is_available" {{ $book->is_available ? 'checked' : '' }}>
        Available
    </label>

    <br><br>

    <button class="btn btn-primary">Update Book</button>

</form>

@endsection