<?php

namespace App\Auth;

class LoginAuthenticator extends DummyAuthenticator
{

    function login($login, $password): bool
    {
        if(!empty($login)) {
            if (!preg_match("/[^A-Za-z0-9]/", $login)) {
                if (!empty($password)) {
                    if (!preg_match("/[^A-Za-z0-9]/", $password))
                        $_SESSION['user'] = $login;
                    return true;
                }
            }
        }
        return false;
    }
}