<?php

include_once "I18n.class.php";

class Language extends I18n
{
    // Every single new array you add here you also need to add it on i18n.class.php

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