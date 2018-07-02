      <section class="hero is-info is-medium is-bold">
            <div class="hero-body himasi-banner">
                  <div class="container">
                        <div class="columns is-pulled-right">
                              <div class="column jumbotron-text">
                                    <!-- <p class="subtitle is-6">Tertarik dengan aktivitas kami</p>
                                    <p class="title is-3">Ayo Bergabung !!!</p>
                                    <a class="button is-link">Menjadi Partner</a> -->
                              </div>
                        </div>
                  </div>
            </div>
      </section>
      <style>
            .line-height-deskripsi{
                  line-height: <?= get_theme_mod('perkenalan_himasi_deskripsi_line_height') ?>
            }
      </style>
      <div class="section">
            <div class="container">
                  <div class="columns is-vcentered about-us-banner">
                        <div class="column">
                              <div class="content">
                                    <p class="title is-3"><?= get_theme_mod('perkenalan_himasi_judul') ?></p>
                                    <p class="line-height-deskripsi"><?= get_theme_mod('perkenalan_himasi_deskripsi') ?></p>
                              </div>
                              <!-- <a class="button is-link">Selengkapnya</a> -->
                        </div>
                        <div class="column is-hidden-mobile">
                              <img class="is-pulled-right" src="<?= get_theme_mod('perkenalan_himasi_gambar') ?>">
                        </div>
                  </div>
            </div>
      </div>
      <style>
            .quote-line-height{
                  line-height: 2;
            }

            .bm--card-equal-height {
                  display: flex;
                  flex-direction: column;
                  height: 100%;
            }
            .bm--card-equal-height .card-footer {
                  margin-top: auto;
            }
      </style>
      <div class="columns is-vcentered has-background-light">
            <div class="container">
                  <div class="column">
                        <div class="content">
                              <h2 class="title has-text-centered">Yang Orang Lain Pikirkan</h2>
                        </div>
                        <div class="columns">
                        <div class="column">
                              <div class="columns">
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='card-content is-flex is-horizontal-center image-center'>
                                                      <img class="people-avatar is-flex is-horizontal-center" src="<?= get_theme_mod('people_think_first_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('people_think_first_nama') ?></h5>
                                                <h6 class="subtitle is-6"><?= get_theme_mod('people_think_first_jabatan') ?></h6>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('people_think_first_quote') ?></h6>
                                          </div>
                                    </div>
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='card-content is-flex is-horizontal-center image-center'>
                                                      <img class="people-avatar is-flex is-horizontal-center" src="<?= get_theme_mod('people_think_second_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('people_think_second_nama') ?></h5>
                                                <h6 class="subtitle is-6"><?= get_theme_mod('people_think_second_jabatan') ?></h6>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('people_think_second_quote') ?></h6>
                                          </div>
                                    </div>
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='card-content is-flex is-horizontal-center image-center'>
                                                      <img class="people-avatar is-flex is-horizontal-center" src="<?= get_theme_mod('people_think_third_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('people_think_third_nama') ?></h5>
                                                <h6 class="subtitle is-6"><?= get_theme_mod('people_think_third_jabatan') ?></h6>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('people_think_third_quote') ?></h6>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>