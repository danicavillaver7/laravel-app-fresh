@extends('layouts.app')

@section('content')

<h2>Add Book</h2>

<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="title" class="form-control mb-2" placeholder="Title">

<input type="text" name="author" class="form-control mb-2" placeholder="Author">

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<select name="genre" class="form-control mb-2">
    <option value="">-- Select Genre --</option>
    <option value="Fiction">Fiction</option>
    <option value="Sci-Fi">Sci-Fi</option>
    <option value="Romance">Romance</option>
    <option value="Mystery">Mystery</option>
    <option value="Horror">Horror</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Thriller">Thriller</option>
    <option value="Adventure">Adventure</option>
    <option value="Drama">Drama</option>
    <option value="Historical">Historical</option>
    <option value="Biography">Biography</option>
    <option value="Educational">Educational</option>
    <option value="Self-Help">Self-Help</option>
    <option value="Technology">Technology</option>
</select>

<input type="number" name="published_year" class="form-control mb-2" placeholder="Year">

<input type="text" name="isbn" class="form-control mb-2" placeholder="ISBN">

<input type="number" name="pages" class="form-control mb-2" placeholder="Pages">

<input type="text" name="language" class="form-control mb-2" placeholder="Language">

<input type="text" name="publisher" class="form-control mb-2" placeholder="Publisher">

<input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price">

<input type="file" name="cover_image" class="form-control mb-2">

<label>
    <input type="checkbox" name="is_available" value="1"> Available
</label>

<br><br>

<button class="btn btn-success">Save</button>

</form>

@endsection