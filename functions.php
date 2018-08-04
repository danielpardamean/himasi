<?php

function logo_setup( $wp_customize ) {
    $wp_customize->add_section('logo_setting_section', array(
        'title'           => __('Logo Setting', 'toolset_starter'),
        'description'     => __('Setingan untuk logo'),
        'active_callback' => 'is_front_page',
        'priority' => 1
    ));

    $wp_customize->add_setting('logo_setting', array(
        'default' => get_template_directory_uri() . '/src/images/logo.png',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_setting', array(
        'label' => __('Slider Gambar', 'toolset_starter'),
        'section' => 'logo_setting_section',
        'settings' => 'logo_setting',
    )));
}

function slider_setup( $wp_customize ) {
    $wp_customize->add_section('slider_setting', array(
        'title'           => __('Slider Setting', 'toolset_starter'),
        'description'     => __('Setingan untuk slider'),
        'active_callback' => 'is_front_page',
        'priority' => 2
    ));

    $wp_customize->add_setting('slider_gambar', array(
        'default' => get_template_directory_uri() . '/src/images/jumbotron.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_gambar', array(
        'label' => __('Slider Gambar', 'toolset_starter'),
        'section' => 'slider_setting',
        'settings' => 'slider_gambar',
    )));

    $wp_customize->add_setting('slider_position',
        array(
        'default' => 'center 30%', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slider_position',
        array(
        'label' => __('Posisi Gambar', 'toolset_starter'),
        'settings' => 'slider_position',
        'type' => 'text',
        'section' => 'slider_setting'
    )));
}

function perkenalan_himasi($wp_customize)
{
    $wp_customize->add_section('perkenalan_himasi', array(
        'title' => __('Perkenalan Himasi', 'toolset_starter'),
        'priority' => 3, // Determines what order this appears in (1 = top)
        'capability' => 'edit_theme_options', // Capability needed to tweak
        'description' => __('Jelaskan organisasimu', 'toolset_starter')
    ));

    $wp_customize->add_setting('perkenalan_himasi_gambar', array(
        'default' => get_template_directory_uri() . '/src/images/banner-about-us.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'perkenalan_himasi_gambar', array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'perkenalan_himasi',
        'settings' => 'perkenalan_himasi_gambar',
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('perkenalan_himasi_judul', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'Apa itu HIMASI?', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));


    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'perkenalan_himasi_judul', // unique ID for the control
        array(
        'label' => __('Judul', 'toolset_starter'),
        'settings' => 'perkenalan_himasi_judul', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'perkenalan_himasi' // ID of our "Company Details" section
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('perkenalan_himasi_deskripsi', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore minus impedit similique ducimus molestias hic maiores cupiditate ut. Iusto hic delectus nesciunt odit, veritatis fugit consectetur eaque necessitatibus libero sint?', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'perkenalan_himasi_deskripsi', // unique ID for the control
        array(
        'label' => __('Deskripsi', 'toolset_starter'),
        'settings' => 'perkenalan_himasi_deskripsi', // id of previously created setting "company_name"
        'type' => 'textarea',
        'section' => 'perkenalan_himasi' // ID of our "Company Details" section
    )));

    $wp_customize->add_setting('perkenalan_himasi_deskripsi_line_height', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => '2', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'perkenalan_himasi_deskripsi_line_height', // unique ID for the control
        array(
        'label' => __('Deskripsi Line Height', 'toolset_starter'),
        'settings' => 'perkenalan_himasi_deskripsi_line_height', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'perkenalan_himasi' // ID of our "Company Details" section
    )));

}

function visi_misi_himasi($wp_customize)
{
    $wp_customize->add_section('visi_misi_himasi', array(
        'title' => __('Visi & Misi HIMASI', 'toolset_starter'),
        'priority' => 3, // Determines what order this appears in (1 = top)
        'capability' => 'edit_theme_options', // Capability needed to tweak
        'description' => __('Jelaskan visi dan misi organisasimu', 'toolset_starter')
    ));

    $wp_customize->add_setting('visi_misi_himasi_gambar', array(
        'default' => get_template_directory_uri() . '/src/images/visi_misi.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'visi_misi_himasi_gambar', array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'visi_misi_himasi',
        'settings' => 'visi_misi_himasi_gambar',
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('visi_misi_himasi_judul', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'Visi & Misi', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));


    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'visi_misi_himasi_judul', // unique ID for the control
        array(
        'label' => __('Judul', 'toolset_starter'),
        'settings' => 'visi_misi_himasi_judul', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'visi_misi_himasi' // ID of our "Company Details" section
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('visi_misi_himasi_deskripsi', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore minus impedit similique ducimus molestias hic maiores cupiditate ut. Iusto hic delectus nesciunt odit, veritatis fugit consectetur eaque necessitatibus libero sint?', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'visi_misi_himasi_deskripsi', // unique ID for the control
        array(
        'label' => __('Deskripsi', 'toolset_starter'),
        'settings' => 'visi_misi_himasi_deskripsi', // id of previously created setting "company_name"
        'type' => 'textarea',
        'section' => 'visi_misi_himasi' // ID of our "Company Details" section
    )));

    $wp_customize->add_setting('visi_misi_himasi_deskripsi_line_height', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => '2', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'visi_misi_himasi_deskripsi_line_height', // unique ID for the control
        array(
        'label' => __('Deskripsi Line Height', 'toolset_starter'),
        'settings' => 'visi_misi_himasi_deskripsi_line_height', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'visi_misi_himasi' // ID of our "Company Details" section
    )));

}

function kontak_himasi($wp_customize)
{
    $wp_customize->add_section('kontak_himasi', array(
        'title' => __('Kontak Himasi', 'toolset_starter'),
        'priority' => 4, // Determines what order this appears in (1 = top)
        'capability' => 'edit_theme_options', // Capability needed to tweak
        'description' => __('', 'toolset_starter')
    ));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('kontak_himasi_nomor_telepon', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => '0000-0000-0000', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));


    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kontak_himasi_nomor_telepon', // unique ID for the control
        array(
        'label' => __('Nomor Telepon', 'toolset_starter'),
        'settings' => 'kontak_himasi_nomor_telepon', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'kontak_himasi' // ID of our "Company Details" section
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('kontak_himasi_alamat_email', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'dummy@email.com', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));


    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kontak_himasi_alamat_email', // unique ID for the control
        array(
        'label' => __('Alamat Email', 'toolset_starter'),
        'settings' => 'kontak_himasi_alamat_email', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'kontak_himasi' // ID of our "Company Details" section
    )));

    // 2.0 Register the new "company_name" setting
    $wp_customize->add_setting('kontak_himasi_alamat', // id of the setting, no need to prefix when using 'theme_mod' as type
        array(
        'default' => 'Jambi', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));


    // 2.1 Define an input for the "company_name" setting
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kontak_himasi_alamat', // unique ID for the control
        array(
        'label' => __('Alamat', 'toolset_starter'),
        'settings' => 'kontak_himasi_alamat', // id of previously created setting "company_name"
        'type' => 'text',
        'section' => 'kontak_himasi' // ID of our "Company Details" section
    )));
}

function kegiatan_first( $wp_customize ) {
    $wp_customize->add_section('kegiatan_first_section', array(
        'title'           => __('Kegiatan #1', 'toolset_starter'),
        'description'     => __(''),
        'priority'        => 4,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_setting('kegiatan_first_image', array(
        'default' => get_template_directory_uri() . '/src/images/kegiatan1.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'kegiatan_first_image_control', array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'kegiatan_first_section',
        'settings' => 'kegiatan_first_image',
    )));

    $wp_customize->add_setting('kegiatan_first_nama',
        array(
        'default' => 'Anonymous', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_first_nama',
        array(
        'label' => __('Nama', 'toolset_starter'),
        'settings' => 'kegiatan_first_nama',
        'type' => 'text',
        'section' => 'kegiatan_first_section'
    )));

    $wp_customize->add_setting('kegiatan_first_deskripsi',
        array(
        'default' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ea numquam, ipsa cupiditate minima libero esse maxime ad accusamus molestiae exercitationem? Vitae inventore tempora sint rem fugit saepe asperiores soluta.', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_deskripsi',
        array(
        'label' => __('Quote', 'toolset_starter'),
        'settings' => 'kegiatan_first_deskripsi',
        'type' => 'textarea',
        'section' => 'kegiatan_first_section'
    )));
}

function kegiatan_second( $wp_customize ) {
    $wp_customize->add_section('kegiatan_second_section', array(
        'title'           => __('Kegiatan #2', 'toolset_starter'),
        'description'     => __(''),
        'priority'        => 5,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_setting('kegiatan_second_image', array(
        'default' => get_template_directory_uri() . '/src/images/kegiatan2.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'kegiatan_second_image_control', array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'kegiatan_second_section',
        'settings' => 'kegiatan_second_image',
    )));

    $wp_customize->add_setting('kegiatan_second_nama',
        array(
        'default' => 'Anonymous', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_second_nama',
        array(
        'label' => __('Nama', 'toolset_starter'),
        'settings' => 'kegiatan_second_nama',
        'type' => 'text',
        'section' => 'kegiatan_second_section'
    )));

    $wp_customize->add_setting('kegiatan_second_deskripsi',
        array(
        'default' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus rerum quis voluptatem sed cumque architecto alias obcaecati ducimus quibusdam. Quo tempore debitis aspernatur harum maxime eligendi nemo unde fuga possimus.', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_second_deskripsi',
        array(
        'label' => __('Quote', 'toolset_starter'),
        'settings' => 'kegiatan_second_deskripsi',
        'type' => 'textarea',
        'section' => 'kegiatan_second_section'
    )));
}

function kegiatan_third( $wp_customize ) {
    $wp_customize->add_section('kegiatan_third_section', array(
        'title'           => __('Kegiatan #3', 'toolset_starter'),
        'description'     => __(''),
        'priority'        => 6,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_setting('kegiatan_third_image', array(
        'default' => get_template_directory_uri() . '/src/images/kegiatan3.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'kegiatan_third_image_control', array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'kegiatan_third_section',
        'settings' => 'kegiatan_third_image',
    )));

    $wp_customize->add_setting('kegiatan_third_nama',
        array(
        'default' => 'Anonymous', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_third_nama',
        array(
        'label' => __('Nama', 'toolset_starter'),
        'settings' => 'kegiatan_third_nama',
        'type' => 'text',
        'section' => 'kegiatan_third_section'
    )));

    $wp_customize->add_setting('kegiatan_third_deskripsi',
        array(
        'default' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet natus ipsam tempore, adipisci quis dignissimos nulla ab. Recusandae repellat alias architecto dignissimos in minima, ut totam illo at, voluptate doloremque.', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'kegiatan_third_deskripsi',
        array(
        'label' => __('Quote', 'toolset_starter'),
        'settings' => 'kegiatan_third_deskripsi',
        'type' => 'textarea',
        'section' => 'kegiatan_third_section'
    )));
}

function team( $wp_customize, $index ) {
    $wp_customize->add_section('team_section_'.$index, array(
        'title'           => __('Team #'.$index, 'toolset_starter'),
        'description'     => __(''),
        'priority'        => 6,
        'active_callback' => 'is_front_page',
    ));

    $wp_customize->add_setting('team_image_'.$index, array(
        'default' => get_template_directory_uri() . "/src/images/default-team-avatar.png",
        'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_image_control_'.$index, array(
        'label' => __('Image', 'toolset_starter'),
        'section' => 'team_section_'.$index,
        'settings' => 'team_image_'.$index,
    )));

    $wp_customize->add_setting('team_nama_'.$index,
        array(
        'default' => 'Anonymous', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'team_nama_'.$index,
        array(
        'label' => __('Nama', 'toolset_starter'),
        'settings' => 'team_nama_'.$index,
        'type' => 'text',
        'section' => 'team_section_'.$index
    )));

    $wp_customize->add_setting('team_jabatan_'.$index,
        array(
        'default' => 'Anggota', // Default setting/value to save
        'type' => 'theme_mod', // 'theme_mod' or 'option'. [print-theme-settings] only supports theme related settings (theme_mod)
        'capability' => 'edit_theme_options', // Optional. Special permissions for accessing this setting.
        'transport' => 'refresh' // What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant).
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'team_jabatan_'.$index,
        array(
        'label' => __('Jabatan', 'toolset_starter'),
        'settings' => 'team_jabatan_'.$index,
        'type' => 'text',
        'section' => 'team_section_'.$index
    )));
}

function set_customize_default($wp_customize){
    $arrays = [
        'perkenalan_himasi_gambar',
        'perkenalan_himasi_judul',
        'perkenalan_himasi_deskripsi',
        'perkenalan_himasi_deskripsi_line_height',
        'visi_misi_himasi_gambar',
        'visi_misi_himasi_judul',
        'visi_misi_himasi_deskripsi',
        'visi_misi_himasi_deskripsi_line_height',
        'kontak_himasi_nomor_telepon',
        'kontak_himasi_alamat_email',
        'kontak_himasi_alamat',
        'kegiatan_first_image',
        'kegiatan_first_nama',
        'kegiatan_first_jabatan',
        'kegiatan_first_deskripsi',
        'kegiatan_second_image',
        'kegiatan_second_nama',
        'kegiatan_second_jabatan',
        'kegiatan_second_deskripsi',
        'kegiatan_third_image',
        'kegiatan_third_nama',
        'kegiatan_third_jabatan',
        'kegiatan_third_deskripsi',
        'slider_gambar',
        'slider_position',
    ];

    for ($i=1; $i <= 12; $i++) {
        $arrays[] = 'team_nama_'.$i;
        $arrays[] = 'team_image_'.$i;
        $arrays[] = 'team_jabatan_'.$i;
    }

    foreach ($arrays as $id) {
            $setting = $wp_customize->get_setting( $id );
            $value = get_theme_mod( $id );
            if(!isset($value) || false == $value){
                set_theme_mod($setting->id, $setting->default);
            }
    }
}

function create_pages(){
    if(get_page_by_title('Blog') == null){
        $post = array(
            'post_content'   => 'content', //content of page
            'post_title'     =>'Blog', //title of page
            'post_status'    =>  'publish' , //status of page - publish or draft
            'post_type'      =>  'page'  // type of post
        );
        wp_insert_post( $post );
    }

    if(get_page_by_title('Event') == null){
        $post = array(
            'post_content'   => 'content', //content of page
            'post_title'     =>'Event', //title of page
            'post_status'    =>  'publish' , //status of page - publish or draft
            'post_type'      =>  'page'  // type of post
        );
        wp_insert_post( $post );
    }
}

function himasi_theme_setup($wp_customize)
{
    perkenalan_himasi($wp_customize);
    visi_misi_himasi($wp_customize);
    kontak_himasi($wp_customize);
    kegiatan_first($wp_customize);
    kegiatan_second($wp_customize);
    kegiatan_third($wp_customize);
    for ($i=1; $i <= 12; $i++) {
        team($wp_customize, $i);
    }
    set_customize_default($wp_customize);
    slider_setup($wp_customize);
    logo_setup($wp_customize);
    create_pages();
}

add_action('customize_register', 'himasi_theme_setup');