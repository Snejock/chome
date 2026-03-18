<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'ch-redis-1',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'oc1s1i4ms6zi',
  'passwordsalt' => 'NBJctS18rPglhIqcSJ/ir/Df75SvP2',
  'secret' => 'W67QVHcqL8yBMu9QRnGeP2LMjxai250DaTvmE1WZkmBW90ne',
  'trusted_domains' =>
  array (
    0 => 'cloud.chome.pro',
  ),
  'overwriteprotocol' => 'https',
  'overwritehost' => 'cloud.chome.pro',
  'overwrite.cli.url' => 'https://cloud.chome.pro',
  'trusted_proxies' => array('172.16.0.0/12', '192.168.0.0/16'),
  'default_phone_region' => 'RU',
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '33.0.0.16',
  'overwrite.cli.url' => 'http://cloud.chome.pro',
  'dbname' => 'nextcloud',
  'dbhost' => 'ch-pg-1',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => 'zblzDvp0evmCyJKMoYeeXZZTT9k7Qu',
  'installed' => true,
);