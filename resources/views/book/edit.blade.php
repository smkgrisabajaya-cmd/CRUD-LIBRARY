<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .input-book {
        transition: 0.3s;
    }

    .input-book:focus {
        border-color: blue;
        box-shadow: 0 0 0 0.25rem rgba(0, 0, 255, 0.15);
    }
</style>

<body>

    <H1 class="p-1 text-center">Update Your Book</H1>
    <p class="fs-3">Details</p>

    <form action="postForm" method="post">
        @csrf
        <div class="mt-5">
            <p class="fw-semibold">Book Title</p>
            <input type="text" name="title" class="form-control input-book" style="border:1px solid black; width:70%;">
        </div>
        <div class="mt-3">
            <p class="fw-semibold">Author</p>
            <input type="text" name="author" class="form-control input-book" style="border:1px solid black; width:70%;">
        </div>

        <div class="row mt-3">
            <div class="col-4">
                <p class="fw-semibold">Stock</p>
                <input type="number" name="stock" class="form-control" min="0">
            </div>

            <div class="col-6">
                <p class="fw-semibold">Image</p>
                <input type="file" name="img">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-5" style="width:500px;">Send</button>
    </form>
    </div>

    </div>
</body>

</html>