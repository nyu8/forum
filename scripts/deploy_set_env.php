<?php

function setEnv(string $key, string $value)
{
  $gitHubEnv = $_SERVER['GITHUB_ENV'];
  file_put_contents($gitHubEnv, "$key=$value\n", FILE_APPEND);
}

$deployPath = trim($_SERVER['DEPLOY_PATH'], '\\/');

$deployList = [
  'packages/',
  'vendor/',
  '.htaccess',
  'composer.json',
  'extend.php',
  'flarum',
  'index.php',
  'site.php'
];

$packageListStr = join(' ', $deployList);
setEnv('PACKAGE_LIST', $packageListStr);

$removeList = array_map(function ($item) use ($deployPath) {
  return "$deployPath/$item";
}, $deployList);
$removeListStr = join(' ', $removeList);
setEnv('REMOVE_LIST', $removeListStr);
