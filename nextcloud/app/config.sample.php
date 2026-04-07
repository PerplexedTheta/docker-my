<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
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
  'upgrade.disable-web' => true,
  'serverid' => 1,
  'instanceid' => 'xxxxxx',
  'passwordsalt' => 'xxxxxx',
  'secret' => 'xxxxxx',
  'trusted_domains' =>
  array (
    0 => 'caddy',
    1 => 'nextcloud.example.com',
    2 => 'localhost',
  ),
  'trusted_proxies' =>
  array (
    0 => '10.192.0.0/16',
    1 => 'fe80:dead:beef::/56',
  ),
  'datadirectory' => '/var/www/html/data',
  'maintenance_window_start' => 1,
  'dbtype' => 'pgsql',
  'version' => '33.0.2.2',
  'overwrite.cli.url' => 'https://caddy',
  'dbname' => 'nextcloud',
  'dbhost' => 'postgres',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => 'xxxxxx',
  'default_phone_region' => 'GB',
  'memcache.local' => '\OC\Memcache\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'port' => '6379',
    'dbindex' => 0,
    'timeout' => 1.5,
    'read_timeout' => 1.5,
  ),
  'installed' => true,
  'maintenance' => false,
  'mail_domain' => 'localnet',
  'mail_from_address' => 'root',
  'mail_smtpmode' => 'smtp',
  'mail_smtphost' => 'localhost',
  'mail_smtpport' => '25',
  'mail_sendmailmode' => 'smtp',
  'mail_smtpstreamoptions' =>
  array (
    'ssl' =>
    array (
      'allow_self_signed' => false,
      'verify_peer' => true,
      'verify_peer_name' => true,
    ),
  ),
  'loglevel' => 2,
);