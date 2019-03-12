<?php
namespace PrivacyZeker\Mustache\Facades;


use Illuminate\Support\Facades\Facade;

class Mustace extends Facade
{

        public static function getFacadeAccessor()
        {
                return 'mustache';
        }

}