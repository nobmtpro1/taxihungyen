<?php
if (!function_exists('___')) {
    function ___($content_vi, $content_en)
    {
        $lang = $_REQUEST['lang'] ?? $_SESSION['lang'] ?? 'vi';
        $_SESSION['lang'] = $lang;
        if ($lang == 'vi') {
            return $content_vi;
        } else {
            return $content_en;
        }
    }
}
