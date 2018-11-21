<?php

// code voor het creeren chaptcha

    session_start();
    $captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
    $captchanumber = substr(str_shuffle($captchanumber), 0,6);
    $_SESSION["code"] = $captchanumber;
    $image = imagecreatefromjpeg("bj.jpg");
    $foreground = imagecolorallocate($image, 175, 199, 200);
    imagestring($image, 5, 45, 8, $captchanumber, $foreground);
    header('content-type: image/png');
    imagepng($image);
?>