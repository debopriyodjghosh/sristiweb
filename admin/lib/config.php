<?php
// ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

// DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'shibpmpw_web');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'shibpmpw_develop');
define('DB_PASSWORD', 'new2020');

// FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
?>