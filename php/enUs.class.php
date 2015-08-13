<?php

include_once "I18n.class.php";

class Language extends I18n
{

    function __construct()
    {

        $this->login = [
            "login" => "Login",
        ];

        $this->notFound = [
            "not_found_title" => "Page not found",
        ];

        $this->error = [
            "error_default_error" => "Something unusual has happened, try again later.",
        ];

        $this->success = [
            "login_success" => "Successfully logged in",
        ];

    }

}