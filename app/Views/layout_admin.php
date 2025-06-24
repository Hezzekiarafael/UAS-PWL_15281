<!-- menentukan halaman apa yang sedang diakses oleh user. -->
<?php
$hlm = "Home";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>


<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
    <title>-Miracle Pages-<?php echo $hlm ?></title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="<?= base_url()?>booksaw/images/favicon.ico" type="image/x-icon" />

     <!-- [Font] Family -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="<?= base_url()?>dist/assets/css/style.css" id="main-style-link" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
	<div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
		<div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
	</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ Sidebar Menu ] start -->
	<?= $this->include('components/sidebarAdmin') ?>
	<!-- [ Sidebar Menu ] end -->


	<!-- [ Header Topbar ] start -->
	<?= $this->include('components/headerAdmin') ?>
	<!-- [ Header ] end -->

	<!-- [ Main Content ] -->
	<?= $this->renderSection('content') ?>
	<!-- [ Main Content ] end -->

	<!-- Footer -->
	<?= $this->include('components/footerAdmin') ?>
	
    <!-- Required Js -->
    <script src="<?= base_url()?>dist/assets/js/plugins/simplebar.min.js"></script>
    <script src="<?= base_url()?>dist/assets/js/plugins/popper.min.js"></script>
    <script src="<?= base_url()?>dist/assets/js/icon/custom-icon.js"></script>
    <script src="<?= base_url()?>dist/assets/js/plugins/feather.min.js"></script>
    <script src="<?= base_url()?>dist/assets/js/component.js"></script>
    <script src="<?= base_url()?>dist/assets/js/theme.js"></script>
    <script src="<?= base_url()?>dist/assets/js/script.js"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

    
    <script>
      layout_change('false');
    </script>
     
    
    <script>
      layout_theme_sidebar_change('dark');
    </script>
    
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
     
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      main_layout_change('vertical');
    </script>
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  <!-- [Body] end -->
</html>
