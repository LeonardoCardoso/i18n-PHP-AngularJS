<?php

include_once "I18n.class.php";

class Language extends I18n
{
    // Every single new array you add here you also need to add it on i18n.class.php

    function __construct()
    {

        $this->login = [
            "login" => "Fazer login",
        ];

        $this->notFound = [
            "not_found_title" => "Página não encontrada",
        ];

        $this->error = [
            "error_default_error" => "Algo inesperado ocorreu, tente novamente em instantes.",
        ];

        $this->success = [
            "login_success" => "Login realizado com successo",
        ];

    }

}