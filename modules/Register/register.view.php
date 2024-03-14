<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./modules/Register/register.style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <img src="assets/images/logo.jpg">
                    </a>
                </li>
        </div>
    </nav>
    <main class="pt-5">
        <div class="login bg-white w-50 m-auto p-5">
            <h3 class="text-center pt-1">Register</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="register-form" class="form" action="./modules/Register/register.controller.php" method="post">
                                <div class="form-group">
                                    <label for="username" class="">Nome:</label><br>
                                    <input type="text" name="nome" id="nome" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="cognome" class="">Cognome:</label><br>
                                    <input type="text" name="cognome" id="cognome" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="">Email:</label><br>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group pt-2">
                                    <input type="submit" name="register-submit" class="btn btn-primary btn-md" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>