<?php
//DataBase
define('DB_DATABASENAME', 'id17996585_latest');
define('DB_USERNAME', 'id17996585_root');
define('DB_USERPWD', 'Peter18988294%%');
define('DB_HOST', 'localhost');
//Establish database connection
try
{
    $dbh = new PDO("mySQL:host=".DB_HOST.";.DB_NAME, DB_USER, DB_PASS,
     array(PDO::MYSQL_ATTR_INIT_COMMAND->"SET NAMES'utf8'"));
}
catch(PDOException Se)
{
    Exit("Error:".Se->getmessage());
}
?>
