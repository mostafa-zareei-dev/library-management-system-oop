<?php

function autoloader($class)
{
    $classFile = __DIR__ . DIRECTORY_SEPARATOR . "$class.php";

    if (file_exists($classFile) && is_readable($classFile)) {
        include $classFile;
    } else {
        die("class {$class} does not exist in path {$classFile}.");
    }
}

spl_autoload_register('autoloader');
