<?php

if (!function_exists('pegj_get_plugin_slug')) {
    function pegj_get_plugin_slug()
    {
        $path = pegj_get_plugin_dir_path();

        return basename($path);
    }
}

if (!function_exists('pegj_get_plugin_domain')) {
    function pegj_get_plugin_domain()
    {
        return str_replace('-', '_', sanitize_title_with_dashes(pegj_get_plugin_slug()));
    }
}

if (!function_exists('pegj_get_plugin_dir_path')) {
    function pegj_get_plugin_dir_path()
    {
        $root = dirname(__DIR__, 4);

        return rtrim($root, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('pegj_get_plugin_dir_url')) {
    function pegj_get_plugin_dir_url()
    {
        $rel = str_replace(WP_PLUGIN_URL, '', pegj_get_plugin_slug());

        return plugins_url($rel);
    }
}

if (!function_exists('pegj_get_vendor_file_path')) {
    function pegj_get_vendor_file_path($path = __DIR__)
    {
        return dirname($path);
    }
}

if (!function_exists('pegj_get_vendor_url')) {
    function pegj_get_vendor_url($path = __DIR__)
    {
        $vendor_path = str_replace('\\', '/', $path);
        $wp_plugin_dir = str_replace('\\', '/', WP_PLUGIN_DIR);
        $rel = str_replace($wp_plugin_dir, '', $vendor_path);

        return plugins_url($rel);
    }
}