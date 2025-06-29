<!-- menentukan halaman apa yang sedang diakses oleh user menggunakn fungsi uri_string() -->
<?php
$hlm = "Home";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- menggunakan variable $hlm berefek di judul tab di browser.-->
	<title>Miracle Pages <?php echo $hlm ?></title>

	
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url()?>booksaw/images/favicon.ico" type="image/x-icon" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css"href="<?= base_url()?>booksaw/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>booksaw/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css"href="<?= base_url()?>booksaw/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>booksaw/style.css">

	<!-- Select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- digunakan disini -->
	<title>Miracle Pages <?php echo $hlm ?></title>

	
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url()?>booksaw/images/favicon.ico" type="image/x-icon" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css"href="<?= base_url()?>booksaw/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>booksaw/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css"href="<?= base_url()?>booksaw/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>booksaw/style.css">

	<!-- Select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>


<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <!-- header -->
    <?= $this->include('components/header') ?>

    <!-- Konten halaman -->
    <?= $this->renderSection('content') ?>

    <!-- footer -->
    <?= $this->include('components/footer') ?>

    <!-- Scripts -->
    <!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugin lainnya (Select2, dll)-->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>

    <!-- Scripts dari template/theme -->
	<!-- <script src="<?= base_url()?>booksaw/js/jquery-1.11.0.min.js"></script> -->
    <script src="<?= base_url()?>booksaw/js/plugins.js"></script>
    <script src="<?= base_url()?>booksaw/js/script.js"></script>


    <!-- Scripts spesifik halaman-->
    <?= $this->renderSection('script') ?>

</body>
</html>

</body>

</html>

