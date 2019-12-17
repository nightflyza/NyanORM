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
    	$result='';
    	if (!empty($title)) {
        	$result = $title."\n";
    	}
        $result.= $data."\n";
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