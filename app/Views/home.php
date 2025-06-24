<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section id="billboard">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="prev slick-arrow">
						<i class="icon icon-arrow-left"></i>
					</button>

					<div class="main-slider pattern-overlay">
						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">Life of the Wild</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
									ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
									urna, a eu.</p>
								
							</div><!--banner-content-->
							<img src="<?= base_url()?>booksaw/images/main-banner1.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">Birds gonna be Happy</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
									ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
									urna, a eu.</p>
								
							</div><!--banner-content-->
							<img src="<?= base_url()?>booksaw/images/main-banner2.jpg" alt="banner" class="banner-image">
						</div><!--slider-item-->

					</div><!--slider-->

					<button class="next slick-arrow">
						<i class="icon icon-arrow-right"></i>
					</button>

				</div>
			</div>
		</div>

	</section>

	<section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="<?= base_url()?>booksaw/images/client-image1.png" alt="client"></a>
							<a href="#"><img src="<?= base_url()?>booksaw/images/client-image2.png" alt="client"></a>
							<a href="#"><img src="<?= base_url()?>booksaw/images/client-image3.png" alt="client"></a>
							<a href="#"><img src="<?= base_url()?>booksaw/images/client-image4.png" alt="client"></a>
							<a href="#"><img src="<?= base_url()?>booksaw/images/client-image5.png" alt="client"></a>
						</div>
					</div><!--image-holder-->
				</div>
			</div>
		</div>
	</section>

	<section id="featured-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">Featured Books</h2>
					</div>

					<div class="product-list" data-aos="fade-up">
						<div class="row">

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?= base_url()?>booksaw/images/product-item1.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Simple way of piece life</h3>
										<span>Armor Ramsey</span>
										<div class="item-price">$ 40.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?= base_url()?>booksaw/images/product-item2.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Great travel at desert</h3>
										<span>Sanchit Howdy</span>
										<div class="item-price">$ 38.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?= base_url()?>booksaw/images/product-item3.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>The lady beauty Scarlett</h3>
										<span>Arthur Doyle</span>
										<div class="<?= base_url()?>booksaw/item-price">$ 45.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?= base_url()?>booksaw/images/product-item4.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Once upon a time</h3>
										<span>Klien Marry</span>
										<div class="item-price">$ 35.00</div>
									</figcaption>
								</div>
							</div>

						</div><!--ft-books-slider-->
					</div><!--grid-->


				</div><!--inner-content-->
			</div>

			<div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="<?= base_url('allProduk') ?>" class="btn-accent-arrow">View all products 
                            <i class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="<?= base_url()?>booksaw/images/single-image.jpg" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Selling Book</h2>

								<div class="products-content">
									<div class="author-name">By Timbur Hood</div>
									<h3 class="item-title">Birds gonna be happy</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
										libero ipsum enim pharetra hac.</p>
									<div class="item-price">$ 45.00</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

	<section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">Popular Books</h2>
					</div>

					<ul class="tabs">
						<li data-tab-target="#all-genre" class="active tab">All Genre</li>
						<li data-tab-target="#business" class="tab">Business</li>
						<li data-tab-target="#technology" class="tab">Technology</li>
						<li data-tab-target="#romantic" class="tab">Romantic</li>
						<li data-tab-target="#adventure" class="tab">Adventure</li>
						<li data-tab-target="#fictional" class="tab">Fictional</li>
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

					

						<div id="business" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item2.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Peaceful Enlightment</h3>
											<span>Marmik Lama</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item4.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Great travel at desert</h3>
											<span>Sanchit Howdy</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item6.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Life among the pirates</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item8.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Simple way of piece life</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

							</div>
						</div>

						<div id="technology" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item1.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Peaceful Enlightment</h3>
											<span>Marmik Lama</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item3.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Great travel at desert</h3>
											<span>Sanchit Howdy</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item5.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Life among the pirates</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item7.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Simple way of piece life</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>
							</div>
						</div>

						<div id="romantic" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item1.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Peaceful Enlightment</h3>
											<span>Marmik Lama</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item3.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Great travel at desert</h3>
											<span>Sanchit Howdy</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item5.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Life among the pirates</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item7.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Simple way of piece life</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>
							</div>
						</div>

						<div id="adventure" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item5.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Life among the pirates</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item7.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Simple way of piece life</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>
							</div>
						</div>

						<div id="fictional" data-tab-content>
							<div class="row">
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item5.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Life among the pirates</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>

								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?= base_url()?>booksaw/images/tab-item7.jpg" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>Simple way of piece life</h3>
											<span>Armor Ramsey</span>
											<div class="item-price">$ 40.00</div>
										</figcaption>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div><!--inner-tabs-->

			</div>
		</div>
	</section>



<?= $this->endSection() ?>