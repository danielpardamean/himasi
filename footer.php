<style>
        .margin-side-5{
                margin: 0 2px;
        }

        .gallery-margin{
                margin: 2px;
        }
</style>
<div class="columns himasi-footer">
        <div class="section column">
                <div class="container">
                        <div class="columns">
                                <div class="column is-3 gallery is-hidden-mobile">
                                        <p class="title is-6">Gallery</p>
                                        <div class="columns is-multiline">
                                                <?php
                                                        $attachments = get_posts(array(
                                                                'post_type' => 'attachment',
                                                                'posts_per_page' => 6,
                                                                'numberposts' => -1,
                                                                'post_status' => null,
                                                                'post_parent' => null,
                                                                'orderby' => 'date',
                                                                'order' => 'DESC',
                                                                'post_mime_type'   => [
                                                                        'image/jpeg',
                                                                        'image/png',
                                                                        'image/jpeg'
                                                                ],
                                                                'suppress_filters' => true
                                                        ));
                                                ?>
                                                <style>
                                                .center-cropped {
                                                        width: 100%;
                                                        height: 100px;
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        background-size: cover;
                                                }
                                                </style>
                                                <?php foreach($attachments as $attachment): ?>
                                                <div class="column gallery-margin is-two-fifths is-paddingless">
                                                        <div class="center-cropped" style="background-image: url('<?= $attachment->guid ?>');">
                                                        </div>
                                                        <!-- <figure class="image is-5by4">
                                                                <img src="<?= $attachment->guid ?>">
                                                        </figure> -->
                                                </div>
                                                <?php endforeach ?>
                                        </div>
                        </div>
                        <div class="column is-9 is-12-mobile">
                                <div class="columns">
                                        <div class="column has-text-right has-text-centered-mobile">
                                                <p class="title is-6">Contact Us</p>
                                                <div class="content">
                                                        <p class="subtitle is-6"><?= get_theme_mod('kontak_himasi_alamat') ?></p>
                                                        <p class="subtitle is-6"><?= get_theme_mod('kontak_himasi_nomor_telepon') ?></p>
                                                        <p class="subtitle is-6"><?= get_theme_mod('kontak_himasi_alamat_email') ?></p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        </div>
                        <div class="columns">
                                        <div class="column has-text-centered">
                                                <p class="subtitle is-6">Copyright HIMASI UNJA</p>
                                        </div>
                        </div>
                </div>
        </div>
</div>
      <?php wp_footer(); ?>
   </body>
</html>