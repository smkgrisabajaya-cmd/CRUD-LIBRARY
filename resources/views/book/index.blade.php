<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="d-flex align-items-center mb-3 mt-5" style="justify-content:space-between;">
        <H1 class="ms-5">Book List</H1>
        <button
            style="padding:8px 12px; background-color: blue; border:none; border-radius: 10px; margin-right:130px;"><a href="/formBook" style="text-decoration:none;  color:white;">Add Book +</a></button>
    </div>

    <table border="2" class="table table-bordered ms-5 text-start" style="width:90%; align-item:center">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($DataBook as $data)
                <tr>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->author }}</td>
                    <td>{{ $data->stock }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>