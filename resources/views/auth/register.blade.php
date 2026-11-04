<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <section class="bg-primary min-vh-100">

        <div class="d-flex justify-content-center align-items-center min-vh-100">
            <div class="card col-3 rounded-4">
                <div class="card-body">
                    <H1 class="fw-bold fs-2 text-center">Register Page</H1>

                    <div class="fw-bold text-primary mt-4">Register Your Account</div>


                    <form action='/postRegister' method="post">
                        @csrf

                        <!-- Form -->
                          <div class="form-floating mt-2">
                            <input type="text" name="name" class="form-control" placeholder="Input Name">
                            <label>Input Name</label>
                        </div>

                        <div class="form-floating mt-2">
                            <input type="email" name="email" class="form-control" placeholder="Input Email">
                            <label>Input Email</label>
                        </div>

                        <div class="form-floating mt-2">
                            <input type="password" name="password" class="form-control" placeholder="Input Password">
                            <label>Input Password</label>
                        </div>

                        <button class="btn btn-primary  w-100 mt-4">Register</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

</body>

</html>