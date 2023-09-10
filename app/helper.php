<?php

use Carbon\Carbon;

if (!function_exists('dateFromTimeStamp')) {
    function dateFromTimeStamp($timeStamp){
        return Carbon::parse($timeStamp);
    }
}
