<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= get_bloginfo('name') ?></title>
      <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/src/css/bulma.min.css">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/src/css/bulma-tooltip.min.css">
      <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/src/css/custom.css">
      <script defer src="<?php echo get_bloginfo('template_directory'); ?>/src/js/font-awesome.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/src/css/blog.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <?php wp_head(); ?>
   </head>
   <body>
      <!-- START NAV -->
      <div class="columns is-paddingless is-marginless organization-information">
         <div class="column is-paddingless">
            <div class="container">
               <div class="email-phone">
                  <span class="icon">
                  <i class="fas fa-phone"></i>
                  </span>
                  <span><?= get_theme_mod('kontak_himasi_nomor_telepon') ?></span>
               </div>
               <div class="email-phone">
                  <span class="icon">
                  <i class="fas fa-envelope"></i>
                  </span>
                  <span><?= get_theme_mod('kontak_himasi_alamat_email') ?></span>
               </div>
            </div>
         </div>
      </div>
      <style>
            figure.image{
                  width: 150px;
            }

            @media(max-width: 1085px){
                  figure.image{
                        width: 110px;
                        margin: 0 10px;
                  }
            }
      </style>
      <!-- START NAV -->
      <nav class="navbar">
         <div class="container">
            <div class="navbar-brand">
               <figure class="image">
                     <a href="/">
                        <img src="<?= get_theme_mod('logo_setting', get_template_directory_uri() . '/src/images/logo.png') ?>" alt="Logo">
                     </a>
               </figure>
               <div id="navbar-burger-id" class="navbar-burger">
                  <span></span>
                  <span></span>
                  <span></span>
            </div>
            </div>
            <div id="navbar-menu-id" class="navbar-menu">
               <div class="navbar-end">
                  <?php $pages = get_pages(); ?>
                  <?php foreach($pages as $page): ?>
                  <a href="<?= get_permalink(get_page_by_title( $page->post_title)) ?>" class="navbar-item"><?= $page->post_title ?></a>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
      </nav>
      <script>
            $(document).ready(function(){
                  // Close mobile & tablet menu on item click
                  $('.navbar-item').each(function(e) {
                  $(this).click(function(){
                        if($('#navbar-burger-id').hasClass('is-active')){
                        $('#navbar-burger-id').removeClass('is-active');
                        $('#navbar-menu-id').removeClass('is-active');
                        }
                  });
                  });

                  // Open or Close mobile & tablet menu
                  $('#navbar-burger-id').click(function () {
                  if($('#navbar-burger-id').hasClass('is-active')){
                        $('#navbar-burger-id').removeClass('is-active');
                        $('#navbar-menu-id').removeClass('is-active');
                  }else {
                        $('#navbar-burger-id').addClass('is-active');
                        $('#navbar-menu-id').addClass('is-active');
                  }
                  });
            });
      </script>
      <!-- END NAV -->