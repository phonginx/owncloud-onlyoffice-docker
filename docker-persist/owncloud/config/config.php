<?php
$CONFIG = array (
  'instanceid' => 'ocng4b6j1hsq',
  'passwordsalt' => 'cYaEkagsNzUEsryX2WTgpOPbVKpCKF',
  'secret' => 'cO3P+yprQnczTfOqWYefjmJj9iHdKP9NfKPv1v6QkPafmKsh',
  'trusted_domains' =>
  array (
    0 => 'localhost',
    1 => 'nginx-server',
  ),
  'datadirectory' => '/var/www/html/data',
  'overwrite.cli.url' => 'http://localhost',
  'version' => '10.0.10.4',
  'dbname' => 'owncloud',
  'dbhost' => 'mysql',
  'dbuser' => 'owncloud',
  'dbpassword' => 'owncloud',
  'dbtableprefix' => 'oc_',
  'logtimezone' => 'UTC',
  'installed' => true,
  'filelocking.enabled' => true,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'localhost',
    'port' => 6379,
    'timeout' => 0.0,
    'password' => '',
  ),
  'onlyoffice' =>
  array (
    'DocumentServerUrl' => '/ds-vpath/',
    'DocumentServerInternalUrl' => 'https://onlyoffice-document-server/',
    'StorageUrl' => 'https://nginx-server/',
  ),
);
