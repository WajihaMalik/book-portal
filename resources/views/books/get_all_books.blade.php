<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .navbar-nav .nav-link {
            color: #000000; 
        }
        .navbar-brand {
            color: #000000; 
        }
        .navbar-brand:hover,
        .navbar-brand:focus {
            color: #000000; 
        }
        .btn-light {
            background-color: #ffffff; 
            color: #000000; 
            border-color: #000000; 
        }
        .btn-light:hover,
        .btn-light:focus {
            background-color: #f0f0f0; 
            color: #000000; 
            border-color: #000000; 
        }
        .btn-light:active,
        .btn-light.active {
            background-color: #e2e2e2; 
            color: #000000; 
            border-color: #000000; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-light py-3">
    <div class="container">
        <a class="navbar-brand" href="/books">BookStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a href="{{ route('books.create') }}" class="btn btn-light">Create</a>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card shadow-sm">
        <div class="card-header bg-gray">
            <h5 class="mb-0">Books</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Number Of Pages</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->edition }}</td>
                            <td>{{ $book->no_of_pages }}</td>
                            <td>{{ \Carbon\Carbon::parse($book->created_at)->format('d M, Y') }}</td>
                            <td>
                                <a href="{{ route('books.edit',$book->id) }}" class="btn btn-dark btn-sm">Edit</a>
                                <a href="#" onclick="deleteBook({{ $book->id  }});" class="btn btn-danger btn-sm">Delete</a>
                                <form id="delete-book-form-{{ $book->id  }}" action="{{ route('books.destroy',$book->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JIyRq6VgOOomXip+mbNw4G0hK5uH3GgEeT7Qpwkq2Wx2ynWFENt7PBh4r2t6JwS9" crossorigin="anonymous"></script>
<script>
    function deleteBook(id) {
        if (confirm("Are you sure you want to delete this book?")) {
            document.getElementById("delete-book-form-"+id).submit();
        }
    }
</script>
</body>
</html>