<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('books.index') }}">📚 Book System</a>

        <div>
            <a class="btn btn-light btn-sm" href="{{ route('books.index') }}">Books</a>
            <a class="btn btn-success btn-sm" href="{{ route('books.create') }}">Add Book</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>