<?php

namespace Project9;

class Security
{
    private $token;

    public function generateToken()
    {
        // Generate a random token string
        $this->token = bin2hex(random_bytes(32));
        // Store the token in the session
        $_SESSION['token'] = $this->token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function validateToken($token)
    {
        // Check if the provided token matches the one in the session
        return isset($_SESSION['token']) && $token === $_SESSION['token'];
    }
}
