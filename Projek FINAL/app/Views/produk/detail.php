<?= $this->extend('layouts/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/landing_page.css">
<link rel="stylesheet" href="/css/nav.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/product.css">
<title>Detail Product</title>
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div style="padding: 100px 50px;">
    <div class="grid-container">
        <div class="item5" style="height: max-content;">
            <img src="<?= $product['image']; ?>" alt="">
            <p class="link-back"><a href="/">Home</a> > <a href="/product">Product</a></p>
            <p class="name-brand"> <b><?= $product['brand']; ?></b></p>
            <i class="miring">Stok <?= $product['stok']; ?></i>
            <i class="miring">No Sepatu <?= $product['no_sepatu']; ?></i>
            <div class="rating-product" style="text-align: left; padding:0 10px;">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa" style="color: #c4c4c4;">6,788 Reviews</span>
            </div>
            <p style="margin-top: 20px; margin-bottom:50px; font-size:25px;">Rp. <?= $product['harga_sepatu']; ?></p>
        </div>
        <div class="item2" style="padding-top: 100px;">
            <h3>Detail Pemesanan</h3>
            <br>
            <form action="<?= '/product/' . $product['id']; ?>" method="POST">
                <?= csrf_field() ?>
                <fieldset>
                    <div class='kickass_field'>
                        <input maxlength='30' required='required' name="name" id="name">
                        <lable>
                            Name
                            <span>Your chosen username</span>
                        </lable>
                    </div>
                    <div class='kickass_field'>
                        <input maxlength='30' required='required' type='email' name="email" id="email">
                        <lable>
                            Email address
                            <span>Your current email address</span>
                        </lable>
                    </div>
                    <div class='kickass_field'>
                        <label for="method_pembayaran" class="method-pay">
                            Choose Payment Methods
                        </label><br>
                        <select name="metode_pembayaran" id="metode_pembayaran" class="input-pay-method">
                            <option value="alfamart">Alfamart</option>
                            <option value="atm">ATM</option>
                            <option value="m-banking">M-Banking</option>
                        </select>
                    </div>
                    <div class='kickass_field'>
                        <label for="method_pembayaran" class="method-pay">
                            Date
                        </label><br>
                        <input type="date" name="tanggal" id="tanggal" required style="padding:0px;">
                    </div>
                    <div class='kickass_field'>
                        <input maxlength='30' pattern='.{6,}' required='required' type='text'>
                        <lable>
                            Alamat Pengiriman
                            <span>Minimum of 6 characters</span>
                        </lable>
                    </div>
                    <button type="submit">Pesan</button>
                </fieldset>
            </form>
            </br>
        </div>
    </div>
</div>
<?= $this->endSection() ?>