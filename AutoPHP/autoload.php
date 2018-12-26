<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 20/12/2018
 * Time: 14:44
 */
define('CLASS_DIR', 'Comportamento' . DIRECTORY_SEPARATOR);
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_register(function($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = CLASS_DIR . $path . '.php';
    if (is_file($file)) {
        require_once($file);
    } else {
        echo "Could not load class {$className}. File not found: {$file}";
        die();
    }
});