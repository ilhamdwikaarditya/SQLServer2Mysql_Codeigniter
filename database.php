<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'toor';
$db['default']['database'] = 'MysqlDBsatu';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['mssql']['hostname'] = 'LocalServer';
$db['mssql']['username'] = 'sa';
$db['mssql']['password'] = 'te';
$db['mssql']['database'] = 'SQLServerDBdua';
$db['mssql']['dbdriver'] = 'odbc';
$db['mssql']['dbprefix'] = '';
$db['mssql']['pconnect'] = TRUE;
$db['mssql']['db_debug'] = TRUE;
$db['mssql']['cache_on'] = FALSE;
$db['mssql']['cachedir'] = '';
$db['mssql']['char_set'] = 'utf8';
$db['mssql']['dbcollat'] = 'utf8_general_ci';
$db['mssql']['swap_pre'] = '';
$db['mssql']['autoinit'] = TRUE;
$db['mssql']['stricton'] = FALSE;