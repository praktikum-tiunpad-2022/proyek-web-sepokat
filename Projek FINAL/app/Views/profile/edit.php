<?= $this->extend('layouts/template') ?>

<?= $this->section('head') ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/landing_page.css">
<link rel="stylesheet" href="/css/nav.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/login.css">
<title>Profile</title>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div class="main">
    <div class="navbar">
        <div class="form">
            <h2>Edit Profile</h2>
            <form action="<?= '/profile/' . session()->get('id'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="text" id="name" name="name" value="<?= session()->get('name');  ?>" required>
                <input type="text" id="text" name="text" value="<?= session()->get('email');  ?>" readonly>
                <input type="text" id="alamat" name="alamat" value="<?= session()->get('alamat');  ?>" required>
                <button type="submit" class="btnn">Edit Profile</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>