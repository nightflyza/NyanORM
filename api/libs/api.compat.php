<?php

/**
 * Some legacy workaround here
 */
if (!function_exists('__')) {

    /**
     * Dummy i18n function
     * 
     * @param string $str
     * @return string
     */
    function __($str) {
        return($str);
    }

}

if (!function_exists('show_window')) {

    /**
     * Replace for system content output
     * 
     * @param string $title
     * @param string $data
     * @param string $align
     */
    function show_window($title, $data, $align = "left") {
        $result = '';
        if (!empty($title)) {
            $result = $title . "\n";
        }
        $result .= $data . "\n";
        print($result);
    }

}


if (!function_exists('curdatetime')) {

    /**
     * Returns current date and time in mysql DATETIME view
     * 
     * @return string
     */
    function curdatetime() {
        $currenttime = date("Y-m-d H:i:s");
        return($currenttime);
    }

}

if (!function_exists('rcms_redirect')) {

    /**
     * Shows redirection javascript. 
     * 
     * @param string $url
     * @param bool $header
     */
    function rcms_redirect($url, $header = false) {
        if ($header) {
            @header('Location: ' . $url);
        } else {
            echo '<script language="javascript">document.location.href="' . $url . '";</script>';
        }
    }

}


if (!function_exists('ispos')) {

    /**
     * Checks for substring in string
     * 
     * @param string $string
     * @param string $search
     * @return bool
     */
    function ispos($string, $search) {
        if (strpos($string, $search) === false) {
            return(false);
        } else {
            return(true);
        }
    }

}