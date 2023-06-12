
<?php
function generateRandomString($length) {
    $upperCase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase='abcdefghijklmnopqrstuvwxyz';
    $number='0123456789';
    $specialCharacters='!@#$%^&*()_+';
    $characters = $upperCase .= $lowercase .= $number .= $specialCharacters;
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}