<?php
$source_webp = __DIR__ . '/assets/images/1.webp';
$dest_png = __DIR__ . '/assets/images/hp-logo.png';
$dest_svg = __DIR__ . '/assets/images/hp-logo.svg';

if (file_exists($source_webp)) {
    copy($source_webp, $dest_png);
    $data = base64_encode(file_get_contents($source_webp));
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="100%" height="100%"><image href="data:image/webp;base64,' . $data . '" width="200" height="200"/></svg>';
    file_put_contents($dest_svg, $svg);
}
