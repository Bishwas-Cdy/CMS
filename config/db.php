<?php
$env = require __DIR__ . '/env.php';

$server = $env['db_host'];
$username = $env['db_user'];
$password = $env['db_pass'];
$database = $env['db_name'];

if (!function_exists('cms_get_connection')) {
  function cms_get_connection(): mysqli
  {
    static $connection = null;

    if ($connection instanceof mysqli) {
      return $connection;
    }

    $connection = @new mysqli(
      $GLOBALS['server'],
      $GLOBALS['username'],
      $GLOBALS['password'],
      $GLOBALS['database']
    );

    if ($connection->connect_error) {
      error_log('Database connection failed: ' . $connection->connect_error);
      exit('Database connection error. Please try again later.');
    }

    $connection->set_charset('utf8mb4');

    return $connection;
  }
}

return cms_get_connection();
?>

