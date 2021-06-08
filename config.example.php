<?php return array (
  'debug' => true,
  'database' =>
  array (
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'port' => 3306,
    'database' => 'nyu8_forum',
    'username' => 'root',
    'password' => 'public',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => 'fl_',
    'strict' => false,
    'engine' => NULL,
    'prefix_indexes' => true,
  ),
  'url' => 'http://localhost:8000',
  'paths' =>
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
  'headers' =>
  array (
    'poweredByHeader' => true,
    'referrerPolicy' => 'same-origin',
  ),
);
