#!/usr/local/bin/php
<?php

/**
 * CLI routing example
 */
error_reporting(E_ALL);
include ('api/autoloader.php');

$appName = ubRouting::optionCliMe();
$usageNotice = 'Usage: ' . $appName . ' --option1=somedata --option2=anotherdata' . "\n";
if (ubRouting::optionCliCount() >= 3) {
    if (ubRouting::optionCliCheck(array('option1', 'option2'))) {
        print('option1 value: ' . ubRouting::optionCli('option1', 'raw') . "\n");
        print('option2 value: ' . ubRouting::optionCli('option2', 'raw') . "\n");
    } else {
        print($usageNotice . '!!!!');
    }
} else {
    print($usageNotice);
}
