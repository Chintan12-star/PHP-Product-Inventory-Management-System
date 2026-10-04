<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $sql=$conn->prepare("insert into users (fname,email,password,phone,city) values (?,?,?,?,?)");
    $sql->bind_param('sssss', $fname, $email, $pass, $phone, $city);
    
    if ($sql->execute()) {
      header("Location:login.php");
}

}
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center mb-5">Register Here!</h2>
            <div
                class="container col-5 border  rounded shadow"
            >
                <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="fname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="pass"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone No.</label>
                    <input
                        type="text"
                        class="form-control"
                        name="phone"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> City</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="text-center">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>
                    
                </div>

                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


