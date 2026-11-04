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

    <H1 class="p-1 text-center">Add a New Book</H1>
    <p class="text-center">Please fill the form below to add a new book to your self</p>

    <div class="container" style="margin-top:100px;">
        <p class="fs-3">Details</p>

        <div class="mt-5">
            <p class="fw-semibold">Book Title</p>
            <input type="text" name="title" class="form-control input-book" style="border:1px solid black; width:70%;">
        </div>
        <div class="mt-3">
            <p class="fw-semibold">Author</p>
            <input type="text" name="author" class="form-control input-book" style="border:1px solid black; width:70%;">
        </div>
        <div class="mt-3">
            <p class="fw-semibold">Book Title</p>
            <input type="number" name="title" class="form-control input-book" style="border:1px solid black; width:70%;">
        </div>

       
    </div>
</body>

</html>