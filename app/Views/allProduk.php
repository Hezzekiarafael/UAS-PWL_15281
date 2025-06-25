 <?= $this->extend('layout') ?>
 <?= $this->section('content') ?>
	<section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">All Books</h2>
					</div>

					<ul class="tabs">
						<li data-tab-target="#all-genre" class="active tab">All Genre</li>
					</ul>

					<!-- Flashdata -->
					<?php
						if (session()->getFlashData('success')) {
						?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<?= session()->getFlashData('success') ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php
						}
						?>
					<!-- Coding proses Read Data untuk data product-->
					 <div class="row">
					<?php foreach ($product as $key => $item): ?>
					<div class="col-md-3">
						<div class="product-item">
							<form action="<?= base_url('cart') ?>" method="post">
								<?= csrf_field(); ?>
								<!-- Gambar Produk -->
								<figure class="product-style">
									<img src="<?= base_url('img/' . $item['foto']) ?>" alt="<?= esc($item['nama']) ?>" class="product-item">
									<button type="submit" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
								</figure>

								<!-- Data Hidden yang Dikirim ke Keranjang -->
								<input type="hidden" name="id" value="<?= $item['id'] ?>">
								<input type="hidden" name="foto" value="<?= $item['foto'] ?>">
								<input type="hidden" name="nama" value="<?= $item['nama'] ?>">
								<input type="hidden" name="harga" value="<?= $item['harga'] ?>">
								<input type="hidden" name="jumlah" value="1">

								<figcaption>
									<h3><?= esc($item['nama']) ?></h3>
									<div class="item-price"><?= number_to_currency($item['harga'], 'IDR', 'id_ID') ?></div>
								</figcaption>
							</form>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

				</div><!--inner-tabs-->

			</div>
		</div>
	</section>

<?= $this->endSection() ?>