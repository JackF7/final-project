<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /** database config **/
    define('DBNAME', $env['DBNAME']);
	define('DBHOST', $env['DBHOST']);
	define('DBUSER', $env['DBUSER']);
	define('DBPASS', $env['DBPASS']);
	define('DBDRIVER', '');

    define('ROOT', 'http://localhost:8889/');

}else
{
    /** database config **/
    define('DBNAME', 'final_project');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');

}
