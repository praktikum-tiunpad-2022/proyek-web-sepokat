<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="form">
                <h2>Login Here</h2>
                <form action="<?= current_url() ?>" method="POST">
                    <?= csrf_field() ?>
                    <input type="email" id="email" name="email" placeholder="Email Adress" required>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <a href="/register" class="regis">Belum punya akun? Daftar Sekarang</a>
                    <button class="btnn">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>