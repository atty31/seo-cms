<?php

namespace App\Http\Env;

/**
 * Class Env_Http_Admin
 * @package App\Http\Env
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class Admin{

    /** Getting the admin base url value from the .env file
     * @return mixed
     */
    public static function getAdminUrl() : string
    {
        //todo include the admin base url into the setup
        return env('ADMIN_BASE_URL');
    }
}