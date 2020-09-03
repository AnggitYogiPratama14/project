<?php
//This file cannot be called directly, only included.
if (str_replace(DIRECTORY_SEPARATOR, "/", __FILE__) == $_SERVER['SCRIPT_FILENAME']) {
    exit;
}

/** The database Host */
define('G_DBTYPE', 'mysql');
/** The database Host */
define('G_DBHOST', 'localhost');
/** The database user*/
define('G_DBUSER', 'u5543928_e2020');
/** The database user password*/
define('G_DBPASSWD', '3XSp-3K]29');
/** The database name*/
define('G_DBNAME', 'u5543928_e2020');
/** The database tables prefix*/
define('G_DBPREFIX', '');

/** The servername offset */
define('G_OFFSET', '/e-learning/www/');

/**Software root path*/
define('G_ROOTPATH', str_replace("\\", "/", dirname(dirname(__FILE__)))."/");

/**Current version*/
define('G_VERSION_NUM', '3.6.15');

/**Include function files*/
require_once('globals.php');
?>