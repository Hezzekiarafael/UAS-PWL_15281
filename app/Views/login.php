<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<!-- pembuatan form login menggunakan array asosiatif di PHP -->
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>

 <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="">
              <ul>
										<li>
											<a href=""><img src="<?= base_url()?>booksaw/images/logo-baru.png" alt="logo" style="width: 250px;"></a>
										</li>
									</ul>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <!-- menampilkan pesan jika ada kesalahan saat login -->
                  <?php
                    if (session()->getFlashData('failed')) {
                    ?>
                        <div class="col-12 alert alert-danger" role="alert">
                            <p class="mb-0">
                                <?= session()->getFlashData('failed') ?>
                            </p>
                        </div>
                    <?php
                    }
                    ?>

                <!-- form login -->
                  <?= form_open('login', 'class = "row g-3 needs-validation"') ?>
                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                           <span class="input-group-text px-3 py-2" id="inputGroupPrepend" style="font-size: 14px; height: 38px; line-height: 1.5;">@</span>
                            
                           <!--form input membuat inputan form dgn tipe text isiny dari array asosiatif di paling atas    -->
                           <?= form_input($username) ?>
                            <div class="invalid-feedback">Please enter your username.</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                                <?= form_password($password) ?>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
                    </div>

                    <?= form_close() ?>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Mr. Hezzekia</a>
              </div>

            </div>
          </div>
        </div>

      </section>
<?= $this->endSection() ?>