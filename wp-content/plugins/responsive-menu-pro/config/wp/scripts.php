<?php

/*
* Admin scripts
*/
if(isset($_GET['page']) && $_GET['page'] == 'responsive-menu-pro'):
    add_action('admin_enqueue_scripts', function() {
        wp_enqueue_media();

        wp_enqueue_script('responsive-menu-pro-bootstrap-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/bootstrap.js', null, null);
        wp_enqueue_style('responsive-menu-pro-bootstrap-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/bootstrap.css', null, null);

        wp_enqueue_script('responsive-menu-pro-select-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/bootstrap-select.js', null, null);
        wp_enqueue_style('responsive-menu-pro-select-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/bootstrap-select.css', null, null);

        wp_enqueue_script('responsive-menu-pro-checkbox-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/bootstrap-toggle.js', null, null);
        wp_enqueue_style('responsive-menu-pro-checkbox-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/bootstrap-toggle.css', null, null);

        wp_enqueue_script('responsive-menu-pro-file-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/bootstrap-file.js', null, null);

        wp_enqueue_script('responsive-menu-pro-minicolours-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/minicolours.js', null, null);
        wp_enqueue_style('responsive-menu-pro-minicolours-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/minicolours.css', null, null);

        wp_enqueue_script('responsive-menu-pro-selectize-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/selectize.js', null, null);
        wp_enqueue_style('responsive-menu-pro-selectize-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/selectize.css', null, null);

        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_script('jquery-ui-draggable');

        wp_register_style('responsive-menu-pro-base-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/base.css', false, null);
        wp_enqueue_style('responsive-menu-pro-base-css');

        wp_register_style('responsive-menu-pro-additional-css', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/additional.css', false, null);
        wp_enqueue_style('responsive-menu-pro-additional-css');

        $options = get_responsive_menu_pro_service('option_manager')->all();
        if(isset($options['admin_theme']) || isset($_POST['menu']['admin_theme'])):
            $theme = isset($_POST['menu']['admin_theme']) ? $_POST['menu']['admin_theme'] : $options['admin_theme'];
            wp_register_style('responsive-menu-pro-admin-css-theme' . $theme, plugin_dir_url(dirname(dirname(__FILE__))) . 'public/css/admin/themes/' . $theme . '.css', false, null);
            wp_enqueue_style('responsive-menu-pro-admin-css-theme' . $theme);
        endif;

        wp_register_script('responsive-menu-pro-base-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/base.js', 'jquery', null);
        wp_localize_script('responsive-menu-pro-base-js', 'WP_HOME_URL', home_url('/'));
        wp_enqueue_script('responsive-menu-pro-base-js');

        wp_register_script('responsive-menu-pro-additional-js', plugin_dir_url(dirname(dirname(__FILE__))) . 'public/js/admin/additional.js', 'jquery', null);
        wp_localize_script('responsive-menu-pro-additional-js', 'WP_HOME_URL', home_url('/'));
        wp_enqueue_script('responsive-menu-pro-additional-js');
    });
endif;

/* Front End scripts */
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('jquery');
});