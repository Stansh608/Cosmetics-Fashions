<?php require_once("config.php"); //connection file
/*
  Constants that have a default value
*/

if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_SQLFILE')) define('DB_SQLFILE', '../utils/database.sql');
if (!defined('THEME_PATH')) define('THEME_PATH', '../../themes');
if (!defined('PRODUCTS_PATH')) define('CATALOG_PATH', '../../PRODUCTS');
if (!defined('VIEWS_FOLDER')) define('VIEWS_FOLDER', 'views');

?>
