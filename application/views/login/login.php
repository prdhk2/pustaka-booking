
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Login Admin</h2>
                <!--  -->
                    <div class="alert alert-danger" role="alert">
                        Username atau Password Salah!
                    </div>
                <form action="<?= base_url('login_c/login'); ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Masukan Username :</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Masukan Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <p>Belum punya akun?<a href="daftar.php">Daftar disini<a></p>
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>