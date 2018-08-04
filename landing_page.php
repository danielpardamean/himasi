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
      <div class="section">
            <div class="container">
                  <div class="columns is-vcentered about-us-banner">
                        <div class="column is-hidden-mobile">
                              <img class="is-pulled-left" src="<?= get_theme_mod('visi_misi_himasi_gambar') ?>">
                        </div>
                        <div class="column">
                              <div class="content">
                                    <p class="title is-3"><?= get_theme_mod('visi_misi_himasi_judul') ?></p>
                                    <p class="line-height-deskripsi"><?= get_theme_mod('visi_misi_himasi_deskripsi') ?></p>
                              </div>
                              <!-- <a class="button is-link">Selengkapnya</a> -->
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
                              <h2 class="title has-text-centered">Kegiatan HIMASI</h2>
                        </div>
                        <div class="column">
                              <style>
                                    .no-padding{
                                          padding: 0;
                                    }
                                    .kegiatan-image{
                                          width: 100%;
                                          height:100%;
                                          border-radius: 3px;
                                    }
                                    .kegiatan-image-container{
                                          margin-bottom: 10px;
                                    }
                              </style>
                              <div class="columns">
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='kegiatan-image-container card-content is-flex is-horizontal-center image-center no-padding'>
                                                      <img class="kegiatan-image is-flex is-horizontal-center" src="<?= get_theme_mod('kegiatan_first_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('kegiatan_first_nama') ?></h5>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('kegiatan_first_deskripsi') ?></h6>
                                          </div>
                                    </div>
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='kegiatan-image-container card-content is-flex is-horizontal-center image-center no-padding'>
                                                      <img class="kegiatan-image is-flex is-horizontal-center" src="<?= get_theme_mod('kegiatan_second_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('kegiatan_second_nama') ?></h5>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('kegiatan_second_deskripsi') ?></h6>
                                          </div>
                                    </div>
                                    <div class="column people-card">
                                          <div class='card equal-height has-text-centered people-card bm--card-equal-height'>
                                                <div class='kegiatan-image-container card-content is-flex is-horizontal-center image-center no-padding'>
                                                      <img class="kegiatan-image is-flex is-horizontal-center" src="<?= get_theme_mod('kegiatan_third_image') ?>">
                                                </div>
                                                <h5 class="title is-5"><?= get_theme_mod('kegiatan_third_nama') ?></h5>
                                                <h6 class="subtitle is-6 has-text-left quote-line-height"><?= get_theme_mod('kegiatan_third_deskripsi') ?></h6>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="columns is-vcentered has-background-white">
            <div class="container">
                  <div class="column">
                        <div class="content">
                              <h2 class="title has-text-centered">Anggota Himasi</h2>
                        </div>
                        <div class="column">
                              <style>
                                    .team-avatar{
                                          width: 103px;
                                    }
                              </style>
                              <div class="columns is-centered is-multiline is-mobile">
                                    <?php for ($index=1; $index <= 12; $index++) : ?>
                                    <div class="column team-avatar is-narrow tooltip" data-tooltip="<?= get_theme_mod('team_nama_'.$index) ?> sebagai <?= get_theme_mod('team_jabatan_'.$index) ?>">
                                          <div class='card-content is-flex is-horizontal-center image-center no-padding'>
                                                <img class="people-avatar is-flex is-horizontal-center" src="<?= get_theme_mod('team_image_'.$index) ?>">
                                          </div>
                                    </div>
                                    <?php endfor ?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>