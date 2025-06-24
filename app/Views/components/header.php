
	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6">
						<div class="right-element">
                            
                            <!-- dropdown account -->
							<?php if (session()->has('isLoggedIn')): ?>
                            <!-- Jika sudah login -->
                            <div class="d-inline-block">
                                <span class="me-2 text-dark fw-bold">
                                    <!-- menampilkan variable session yang isinya username dan role -->
                                    <?= esc(session()->get('username')); ?> (<?= esc(session()->get('role')); ?>)
                                </span>
                                <a href="<?= base_url('logout') ?>" class="btn-danger btn-sm for-buy">
                                    <i class="icon icon-exit"></i> Logout
                                </a>
                            </div>

					<!-- Jika belum login -->	
                        <?php else: ?>
                            <div class="dropdown d-inline-block">
                                <a class="btn-light dropdown-toggle user-account for-buy" href="#" role="button" id="dropdownAccount" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon icon-user"></i> <span>Account</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownAccount">
                                    <li><a class="dropdown-item" href="<?= base_url('login') ?>">login</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>

							<div class="action-menu">
								<div class="search-bar">
									<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
										<i class="icon icon-search"></i>
									</a>
									<form role="search" method="get" class="search-box">
										<input class="search-field text search-input" placeholder="Search"
											type="search">
									</form>
								</div>
							</div>
						</div>
					<!--top-right-->
					</div>

				</div>
			</div>
		</div>
		<!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="index.html"><img src="<?= base_url()?>booksaw/images/logo-baru.png" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="/">Home</a></li>
									<li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>	
									<!-- Jika User blum login chart tidak muncul -->
									<?php
									if (session()->get('role') == 'guest') {
									?>
										<li class="menu-item"> <a href="<?= base_url('cart') ?>" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0$)</span></a></li>
									<?php
									} ?>
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div>
<!--header-wrap-->