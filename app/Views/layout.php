<!-- menentukan halaman apa yang sedang diakses oleh user. -->
<?php
$hlm = "Home";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>

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

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <!-- header -->
    <?= $this->include('components/header') ?>

	<?= $this->renderSection('content') ?>

   <!-- footer -->
        <?= $this->include('components/footer') ?>

	<script src="<?= base_url()?>booksaw/js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="<?= base_url()?>booksaw/js/plugins.js"></script>
	<script src="<?= base_url()?>booksaw/js/script.js"></script>


</body>

</html>