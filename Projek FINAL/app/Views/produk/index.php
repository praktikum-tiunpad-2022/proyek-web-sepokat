<?= $this->extend('layouts/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/css/landing_page.css">
<link rel="stylesheet" href="/css/nav.css">
<title>Product</title>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div style="padding-top: 10px;">
    <h1 class="title-content" style="margin-top: 90px; margin-bottom:0px">
        Our Products
    </h1>
    <p style="text-align:center; margin:40px 50px;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>
    <div style="margin: 0px 50px;">
        <div class="products">
            <?php foreach ($product as $sepatu) : ?>
                <div class="product">
                    <div class="image">
                        <img src="<?= $sepatu['image']; ?>" alt="">
                    </div>
                    <div class="namePrice">
                        <h3><?= $sepatu['brand']; ?></h3>
                    </div>
                    <p>Rp. <?= $sepatu['harga_sepatu']; ?></p>
                    <i class="fa-solid fa-star">Stok <?= $sepatu['stok']; ?></i>
                    <div class="bay">
                        <a href="<?= '/product/' . $sepatu['id']; ?>">Buy Now</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>