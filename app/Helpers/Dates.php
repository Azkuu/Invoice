<?php

namespace App\Helpers;

class Dates
{
    public static function pretty_date($date)
    {
        return date('F d,Y', strtotime($date));
    }
}
