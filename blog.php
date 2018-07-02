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
            <?php
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

            if ($wpb_all_query->have_posts()) : while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post();
            ?>
                <!-- START ARTICLE -->
                <div class="card article">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-center">
                                <img src="<?php echo get_avatar_url( get_the_author_meta( 'email' ), 30 ); ?>" class="author-image" alt="Placeholder image">
                            </div>
                            <div class="media-content has-text-centered">
                                <p class="title article-title">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </p>
                                <p class="subtitle is-6 article-subtitle">
                                    <a><?php echo get_the_author_meta('nickname') ?></a> pada <?php the_date() ?>
                                </p>
                            </div>
                        </div>
                        <div class="content article-body">
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <!-- END ARTICLE -->
            <?php
            endwhile; endif;
			?>
        </section>
        <!-- END ARTICLE FEED -->
        </div>
        <script async type="text/javascript" src="../js/bulma.js"></script>
