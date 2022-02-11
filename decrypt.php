<?php

function decrypt($data, $password) {
    $iv = "0000000000000000";
    return openssl_decrypt($data, 'aes-256-cbc', $password, OPENSSL_RAW_DATA, $iv);
}

$file = $argv[1];

// IMPLEMET DECRYPTION

print(decrypt(file_get_contents($file), $password));