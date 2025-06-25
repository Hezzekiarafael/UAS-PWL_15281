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
  <a href="#checkoutModal" class="btn btn-success uniform-btn" data-bs-toggle="modal" data-bs-target="#checkoutModal">
    Selesai Belanja
</a>

        <?php endif; ?>
</div>
<?php echo form_close() ?> <!-- Form cart/edit DITUTUP DI SINI -->

<!-- untuk popup -->
<!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      
      <?= form_open('buy', ['id' => 'formCheckout']) ?> <!-- Form dibuka DI SINI -->

      <div class="modal-header">
        <h5 class="modal-title">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>

      <div class="modal-body">
        <?= $this->include('checkout') ?> <!-- Form input-input saja, tanpa tombol -->
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Buat Pesanan</button> <!-- Submit harus DI SINI -->
      </div>

      <?= form_close() ?> <!-- Form DITUTUP di sini -->

    </div>
  </div>
</div>


</div><!-- .container -->
</section>

<?php echo form_close() ?>
<?= $this->endSection() ?>

<!-- untuk total dan ongkir -->
<?= $this->section('script') ?>
<script>
$(document).ready(function () {
    var ongkir = 0;
    var total = 0; 
    hitungTotal();

    
    // Select2 hanya aktif saat modal dibuka
    let select2KelurahanInitialized = false;

    $('#checkoutModal').on('shown.bs.modal', function () {
  if (!select2KelurahanInitialized) {
    $('#kelurahan').select2({
      dropdownParent: $('#checkoutModal'),
      placeholder: 'Ketik nama kelurahan...',
      ajax: {
        url: '<?= base_url('get-location') ?>',
        dataType: 'json',
        delay: 500,
        data: function (params) {
          return { search: params.term };
        },
        processResults: function (data) {
          return {
            results: data.map(item => ({
              id: item.id,
              text: item.subdistrict_name + ", " + item.district_name + ", " + item.city_name + ", " + item.province_name + ", " + item.zip_code
            }))
          };
        }
      },
      minimumInputLength: 3
    });

    select2KelurahanInitialized = true;
  }
});

$("#kelurahan").on('change', function() {
    var id_kelurahan = $(this).val(); 
    $("#layanan").empty();

    // Tambahkan placeholder default
    $("#layanan").append($('<option>', {
        value: '',
        text: '-- Pilih layanan pengiriman --',
        disabled: true,
        selected: true
    }));

    $.ajax({
        url: "<?= site_url('get-cost') ?>",
        type: 'GET',
        data: { destination: id_kelurahan },
        dataType: 'json',
        success: function(data) {
            data.forEach(function(item) {
                var text = item.description + " (" + item.service + ") : estimasi " + item.etd;
                $("#layanan").append($('<option>', {
                    value: item.cost,
                    text: text 
                }));
            });
        }
    });
});

// Saat layanan dipilih, update ongkir & total
$("#layanan").on('change', function () {
    ongkir = parseInt($(this).val()) || 0;
    hitungTotal();
});

function hitungTotal() {
        total = ongkir + <?= $total ?>;
        $("#ongkir").val(ongkir);
        $("#total").html("IDR " + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,'));
        $("#total_harga").val(total);
    }




});

</script>
<?= $this->endSection() ?>
