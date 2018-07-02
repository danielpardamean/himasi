<?php get_header(); ?>
      <style>
        .himasi-banner{
            background-image: url(<?= get_theme_mod('slider_gambar', get_template_directory_uri() . '/src/images/jumbotron.jpg') ?>);
            background-position: <?= get_theme_mod('slider_position', 'center 30%') ?>;
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
        }
      </style>
        <?php
            if(is_front_page()){
                get_template_part('landing_page');
            }elseif(is_single()){
                get_template_part('single');
            }else{
                get_template_part('blog');
            }
        ?>
<?php get_footer(); ?>