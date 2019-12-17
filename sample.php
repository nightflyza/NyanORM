<?php

error_reporting(E_ALL);
include ('api/autoloader.php');

$todos=new nya_todo();
$allTodos=$todos->getAll();

print_r($allTodos);
