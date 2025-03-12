<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function createJWT($user)
{
    $key = "secret_key";
    $payload = [
        "iss" => "localhost",
        "aud" => "localhost",
        "iat" => time(),
        "exp" => time() + 3600,
        "data" => $user
    ];
    return JWT::encode($payload, $key, 'HS256');
}

function validateJWT($token)
{
    try {
        $key = "secret_key";
        return JWT::decode($token, new Key($key, 'HS256'));
    } catch (Exception $e) {
        return false;
    }
}