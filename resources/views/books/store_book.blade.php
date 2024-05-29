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
            <a href="{{ route('books.index') }}" class="btn btn-light">Back</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card borde-0 shadow-lg my-4">
                <div class="card-header bg-light">
                    <h4 >Create New Book</h4>
                </div>
                <form enctype="multipart/form-data" action="{{ route('books.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label h6">Title</label>
                            <input value="{{ old('title') }}" type="text" class="@error('title') is-invalid @enderror form-control-lg form-control" placeholder="Title" name="title" style="font-size: 14px;">
                            @error('title')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Author</label>
                            <input value="{{ old('author') }}" type="text" class="@error('author') is-invalid @enderror form-control form-control-lg" placeholder="Author" name="author" style="font-size: 14px;">
                            @error('author')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Edition</label>
                            <input value="{{ old('edition') }}" type="text" class="@error('edition') is-invalid @enderror form-control form-control-lg" placeholder="Edition" name="edition" style="font-size: 14px;">
                            @error('edition')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Number Of Pages</label>
                            <input value="{{ old('number_of_pages') }}" type="number" class="@error('number_of_pages') is-invalid @enderror form-control form-control-lg" placeholder="Number Of Pages" name="number_of_pages" style="font-size: 14px;">
                            @error('number_of_pages')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
