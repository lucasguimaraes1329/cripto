<?php
$theme = '';
if (isset($_COOKIE['site_theme'])) {
    if ($_COOKIE['site_theme'] === 'light') {
        $theme = 'light-mode';
    } else if ($_COOKIE['site_theme'] === 'dark') {
        $theme = '';
    }
}
?>
