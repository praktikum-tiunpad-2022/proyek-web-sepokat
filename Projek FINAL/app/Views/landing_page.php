<?= $this->extend('layouts/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/css/landing_page.css">
<link rel="stylesheet" href="/css/nav.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Landing Page</title>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div class="main">
    <!-- Content Picture -->
    <div class="content">
        <h4>Trade-in-Offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 50% off!</p>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Solway&display=swap');
        </style>
    </div>

    <!-- Product -->
    <h1 class="title-content">Our Products</h1>
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
                <i class="">Stok <?= $sepatu['stok']; ?></i>
                <div class="bay">
                    <button><a href="/product">Buy Now</a></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <!-- Our Customre -->
    <h1 class="title-content">Review By Customers</h1>
    <div class="customers">
        <div class="customer">
            <div class="image">
                <img src="/img/customer/man.png" alt="" style="border-radius: 100%;">
            </div>
            <div class="nameCustomer">
                <h1>Lazia Firli</h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="customer">
            <div class="image">
                <img src="/img/customer/woman.png" alt="" style="border-radius: 100%;  solid;">
            </div>
            <div class="nameCustomer">
                <h1>Nafisa Risqi </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
    </div>

    <div style="height: 1000px;">

    </div>
</div>

<?= $this->endSection() ?>