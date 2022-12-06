<?= $this->extend('layouts/template') ?>

<?= $this->section('head') ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/landing_page.css">
<link rel="stylesheet" href="/css/nav.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/profile.css">
<title>Profile</title>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="Avatar" class="img-fluid my-5" style="width: 100px; padding-top:50%; padding-bottom:50%;" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Data Account</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Name</h6>
                                        <p class="text-muted"><?= $user['name']; ?></p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted"><?= $user['email']; ?></p>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Alamat</h6>
                                        <p class="text-muted"><?= $user['alamat_cust']; ?></p>
                                    </div>
                                </div>
                                <a href="<?= '/profile/edit/' . session()->get('id'); ?>" class="btn btn-primary" style="background-color:#BE2F29;">Edit Data</a>
                                <a href="/logout" class="btn btn-primary" style="background-color:#BE2F29;">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>