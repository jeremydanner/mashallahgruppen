<?php

declare(strict_types=1);

class Language
{
    // public $UserLng;
    //
    // public function __construct($userLanguage)
    // {
    //     $this->UserLng = $userLanguage;
    // }

    public function userLanguage()
    {
        $file =  'language/config/en.ini';
        //. $this->UserLng . '.ini';
        if(!file_exists($file))
        {
            return dd('//localhost:3000/themes/mashallahgruppen/', $file);
        }
        return parse_ini_file($file);
    }
}

$language = new Language;

dd($language->userLanguage());
