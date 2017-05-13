<?php

include_once ROOT. '/models/Error.php';

class ErrorController
{
    public static function action404()
    {
        require_once(ROOT. "/views/error/404.php");
        return true;
    }
}