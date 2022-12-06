<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/product">Product</a></li>
    <ul class="navbar-nav ml-auto">
    </ul>
    <?php if (session()->get('logged_in')) : ?>
        <li style="float:right"><a class="#login" href="<?= '/profile/' . session()->get('id'); ?>"><?= session()->get('name') ?></a></li>

    <?php else : ?>
        <li style="float:right"><a class="#login" href="/login">Login</a></li>
        <li style="float:right"><a class="#login" href="/register">Register</a></li>
    <?php endif; ?>
</ul>