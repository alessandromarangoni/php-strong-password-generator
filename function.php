<?php
$lunghezza=intval($_GET["lunghezza"]);
function generateRandomString($length = 0,) {
    global $password;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    $password=$randomString;
    return $randomString;
}
