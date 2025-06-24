<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<?php echo form_open('cart/edit') ?>

<section id="cart-items" class="my-5">
    <div class="container">
        <div class="section-header align-center">
            <h2 class="section-title">Items in your cart</h2>
        </div>

        <div class="product-list" data-aos="fade-up">
            <div class="row">
                <?php
                $i = 1;
                if (!empty($items)):
                    foreach ($items as $index => $item): ?>
                        <div class="col-md-3">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img src="<?= base_url('img/' . $item['options']['foto']) ?>"
                                         alt="<?= $item['name'] ?>"
                                         class="product-item">
                                </figure>
                                <figcaption>
                                    <h3><?= $item['name'] ?></h3>
                                    <span>Jumlah:
                                        <input type="number" min="1"
                                               name="qty<?= $i++ ?>"
                                               value="<?= $item['qty'] ?>"
                                               style="width:60px;">
                                    </span>
                                    <div class="item-price">Harga: <?= number_to_currency($item['price'], 'IDR') ?></div>
                                    <div class="item-price">Subtotal: <?= number_to_currency($item['subtotal'], 'IDR') ?></div>
                                    <div class="mt-2">
                                        <a href="<?= base_url('cart/delete/' . $item['rowid']) ?>"
                                           class="btn btn-light">Hapus</a>
                                    </div>
                                </figcaption>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div><!-- .row -->
        </div><!-- .product-list -->

    <div class="alert alert-info">
        <?php echo "Total = " . number_to_currency($total, 'IDR') ?>
    </div>

          
    <div class="btn-wrap align-right mt-3 d-flex gap-2">
       <button class="btn btn-primary uniform-btn">Perbarui Keranjang</button>
        <a class="btn btn-light uniform-btn" href="<?php echo base_url() ?>cart/clear">Kosongkan Keranjang</a> 

        <!-- Tombol Selesai Belanja / checkout -->
        <?php if (!empty($items)): ?>
  <a href="#" class="btn btn-success uniform-btn" data-bs-toggle="modal" data-bs-target="#checkoutModal">
    Selesai Belanja
</a>

        <?php endif; ?>
</div>

            <!-- untuk popup -->
             <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <?= $this->include('checkout') ?> <!-- file ini hanya berisi form, bukan full layout -->
      </div>
    </div>
  </div>
</div>





    </div><!-- .container -->
</section>

<?php echo form_close() ?>

<?= $this->endSection() ?>
