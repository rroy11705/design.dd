<?php
  // require_once('sess_auth.php');
  
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php echo $_settings->info('title') != false ? $_settings->info('title').' ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />

    <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url ?>profile_asset/css/default.css">
    <link rel="stylesheet" href="<?php echo base_url ?>profile_asset/css/layout.css">
    <link rel="stylesheet" href="<?php echo base_url ?>profile_asset/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo base_url ?>profile_asset/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
    <script src="<?php echo base_url ?>profile_asset/js/modernizr.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   <!-- Favicons
  ================================================== -->

  </head>