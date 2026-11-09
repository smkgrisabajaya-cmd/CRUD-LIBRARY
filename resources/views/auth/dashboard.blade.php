<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <section class="bg-dark p-3 d-flex" style="justify-content:space-between">
        <div class="d-flex">
            <H1 class="text-light">Library Sistem</H1>
            <ul class="d-flex gap-3 align-items-center mt-3" style="list-style:none;">
                <li><a href="/indexBook" style="text-decoration:none; font-weight:600; color:#CECECE;">Books</a></li>
                <li><a href="" style="text-decoration:none; font-weight:600; color:#CECECE;">My Loans</a></li>
            </ul>
        </div>

        <div class="d-flex gap-3 align-items-center">
            <h4 class="text-secondary fs-5">{{ Auth()->User()->name }}</h4>
            <button class="bg-dark"
                style="border:1px solid aliceblue; padding:6px 10px 6px 10px; border-radius:10px; color:white;">Logout</button>
        </div>
    </section>

    <div class="container mt-5">
        <div class="d-flex justify-content-center gap-3">

            <div class="card col-6">
                <div class="card-body">
                    <p class="ms-1 fs-2 fw-semibold">Welcome, {{ Auth()->User()->name }}</p>
                    <p>Welcome to the <b>Library Management System</b></p>
                    <br>
                    <p style="letter-spacing:1px;">You can browse available books,and view your loan history.</p>
                </div>
            </div>

            <div class="card col-6">
                <div class="card-body">
                    <p class="fw-bold fs-2">Currently Borrowed Books</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>