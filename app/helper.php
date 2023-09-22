<?php

use Carbon\Carbon;

if (!function_exists('dateFromTimeStamp')) {
    function dateFromTimeStamp($timeStamp): Carbon
    {
        return Carbon::parse($timeStamp);
    }
}

if (!function_exists('getSvgIcon')) {
    function getSvgIcon($path, $class = ""): string
    {

        $full_path = asset('themeOne/assets/media/' . $path);

        if (!file_exists($full_path)) {
            return "<!--SVG file not found: $path-->\n";
        }

        $cls = array("svg-icon");

        if (!empty($class)) {
            $cls = array_merge($cls, explode(" ", $class));
        }

        $svg_content = file_get_contents($full_path);

        $output = "<!--begin::Svg Icon | path: $path-->\n";
        $output .= "<span class=\"" . implode(" ", $cls) . "\">" . $svg_content . "</span>";
        $output .= "\n<!--end::Svg Icon-->";

        return $output;
    }
}
