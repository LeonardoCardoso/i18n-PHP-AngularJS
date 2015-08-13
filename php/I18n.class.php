<?php

class I18n
{
    var $login = [];

    var $notFound = [];

    var $error = [];

    var $success = [];

    var $i18n = [];

    function setUp()
    {
        $this->i18n = [
            "login" => $this->login,
            "notFound" => $this->notFound,
            "error" => $this->error,
            "success" => $this->success,
        ];
    }

    function getLang($langRequests = [])
    {
        $this->setUp();
        $result = [];

        foreach ($langRequests as $request) {
            $selection = $this->i18n[$request];
            $result = array_merge($result, $selection);
        }

        return $result;

    }

}