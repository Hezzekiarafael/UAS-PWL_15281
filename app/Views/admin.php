<?= $this->extend('layout_admin') ?>
<?= $this->section('content') ?>

<!-- [ Main Content ] start -->
    <div class="pc-container ">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Admin</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
            <div class="card table-card">
              <div class="card-header">
                <ul>
					<li>
						<a href=""><img src="<?= base_url()?>booksaw/images/icon-admin.png" alt="logo" style="width: 280px; position: relative; top:11px;"></a>
					</li>
				</ul>
              </div>
			  <section id="popular-books" class="bookshelf align-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-header align-center mt-4 mb-4">
								<h2 class="section-title">Books</h2>
							</div>
					<!-- Coding proses Read Data untuk data product-->
					<div class="tab-content align-item-center">
						<div id="all-genre" data-tab-content class="active">
							<div class="row">
							<?php foreach ($product as $key => $item): ?>
								<div class="col-md-4 col-sm-6 mb-4">
								<div class="product-item">
									<figure class="product-style">
									<img src="<?= base_url('img/' . $item['foto']) ?>" alt="<?= esc($item['nama']) ?>" class="product-item">
				
									</figure>
									<figcaption>
									<h3><?= esc($item['nama']) ?></h3>
									<div class="item-price">Rp <?= number_format($item['harga'], 0, ',', '.') ?></div>
									</figcaption>
								</div>								
							</div>
							<?php endforeach; ?>
							</div>
						</div>
						</div>
					</div>
					</div>
						</section>
             
        <!-- [ Main Content ] end -->
      </div>
<?= $this->endSection() ?>