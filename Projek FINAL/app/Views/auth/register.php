<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/register.css">
    <title>Register</title>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="form">
                <form action="<?= current_url() ?>" method="POST">
                    <?= csrf_field() ?>
                    <h2>Create New Account</h2>
                    <input type="nama" name="name" placeholder="Name" required value="<?= old('name') ?>">
                    <input type="email" name="email" placeholder="Email Address" required value="<?= old('email') ?>">
                    <input type="nama" name="address" placeholder="Address" required value="<?= old('address') ?>">
                    <input type="password" name="password" placeholder="Password" required value="<?= old('password') ?>">
                    <input type="password" name="cpassword" placeholder="Confirm Password" required value="<?= old('cpassword') ?>">
                    <button type="submit" class="btnn">Confirm</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>