<?php
session_start();
$codigoCaptcha = substr(md5(time()) ,0, 8);

$_SESSION['captcha'] = $codigoCaptcha;

$imagemCaptcha = imagecreatefrompng("imagemfundo.png");

$fonteCaptcha = imageloadfont("anonymous.gdf");

$corCaptcha = imagecolorallocate($imagemCaptcha, 0,98,215);

imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);

imagepng($imagemCaptcha);

imagedestroy($imagemCaptcha);