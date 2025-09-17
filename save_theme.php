<?php
if (isset($_POST['theme'])) {
    $theme = ($_POST['theme'] === 'light') ? 'light' : 'dark';
    setcookie('site_theme', $theme, time() + 3600 * 24 * 30, '/'); // 30 dias
    echo json_encode(['success' => true, 'theme' => $theme]);
    exit;
}
echo json_encode(['success' => false]);
exit;
?>