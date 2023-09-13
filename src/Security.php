<?php

namespace Project9;

class Security
{
    private $csrf_token;

    public function generateToken()
    {
        // Generate a random token string
        $this->csrf_token = bin2hex(random_bytes(32));
        // Store the token in the session
        $_SESSION['csrf_token'] = $this->csrf_token;
    }

    public function getToken()
    {
        return $this->csrf_token;
    }

    public function validateToken($csrf_token)
    {
        // Check if the provided token matches the one in the session
        return isset($_SESSION['csrf_token']) && $csrf_token === $_SESSION['csrf_token'];
    }
}
