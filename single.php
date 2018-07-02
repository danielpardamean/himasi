<?php get_header(); ?>

<?php
    $query = get_post(get_the_ID());
?>
<style>
        .himasi-banner{
            background-image: url(<?php echo get_bloginfo('template_directory'); ?>/src/images/jumbotron.jpg);
            background-position: center 30%;
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
        }
      </style>
    <section class="hero is-info is-medium is-bold">
        <div class="hero-body himasi-banner">
            <div class="container has-text-centered">
            </div>
        </div>
    </section>
    <div class="container">
        <!-- START ARTICLE FEED -->
        <section class="articles">
            <div class="column is-8 is-offset-2">
               <!-- START ARTICLE -->
<div class="card article">
    <div class="card-content">
        <div class="media">
            <div class="media-center">
                <img src="<?php echo get_avatar_url( get_the_author_meta( 'email', $query->post_author ), 30 ); ?>" class="author-image">
            </div>
            <div class="media-content has-text-centered">
                <p class="title article-title">
                    <?php echo $query->post_title ?>
                </p>
                <p class="subtitle is-6 article-subtitle"><a><?php echo the_author_meta( 'nickname', $query->post_author ) ?></a> pada <?php echo date('n-j-Y', strtotime($query->post_date)) ?></p>
            </div>
        </div>
        <div class="content article-body">
            <?= $query->post_content ?>
        </div>
    </div>
</div>
<!-- END ARTICLE -->
        </section>
        <!-- END ARTICLE FEED -->
        </div>
        <script async type="text/javascript" src="../js/bulma.js"></script>

<?php get_footer(); ?>
