@extends('layouts.app')

@section('content')

<h2>Book Details</h2>

@if($book->cover_image)
    <div class="mb-3">
        <img src="{{ asset('storage/' . $book->cover_image) }}" width="150">
    </div>
@endif

<p><strong>Title:</strong> {{ $book->title }}</p>
<p><strong>Author:</strong> {{ $book->author }}</p>
<p><strong>Description:</strong> {{ $book->description }}</p>
<p><strong>Genre:</strong> {{ $book->genre }}</p>
<p><strong>Published Year:</strong> {{ $book->published_year }}</p>
<p><strong>ISBN:</strong> {{ $book->isbn }}</p>
<p><strong>Pages:</strong> {{ $book->pages }}</p>
<p><strong>Language:</strong> {{ $book->language }}</p>
<p><strong>Publisher:</strong> {{ $book->publisher }}</p>
<p><strong>Price:</strong> ₱{{ $book->price }}</p>

<p>
    <strong>Availability:</strong>
    {{ $book->is_available ? 'Available' : 'Not Available' }}
</p>

<br>

<a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>

@endsection