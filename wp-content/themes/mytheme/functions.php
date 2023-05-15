<?php
function initTheme()
{
    add_filter('use_block_editor_for_post', '__return_false');
    register_nav_menu('header-main', __('Menu chính'));
}

add_action('init', 'initTheme');


require_once 'functions/settings.php';
// require_once 'functions/api.php';
// require_once 'functions/helpers.php';
