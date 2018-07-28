// From config/drupal/settings.php

$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/drupal/sync';

$databases['default']['default'] = array (
  'database' => getenv('DRUPAL_DATABASE') ?: 'drupal',
  'username' => getenv('DRUPAL_DATABASE_USER') ?: 'drupal',
  'password' => getenv('DRUPAL_DATABASE_PASSWORD') ?: 'drupalpw',
  'prefix' => '',
  'host' => getenv('DRUPAL_DATABASE_HOST') ?: 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$env = getenv('ENVIRONMENT') ? strtolower(getenv('ENVIRONMENT')) : 'unknown';

if (file_exists(__DIR__ . '/settings.' . $env . '.php')) {
include __DIR__ . '/settings.' . $env . '.php';
}

if (file_exists(__DIR__ . '/settings.local.php')) {
include __DIR__ . '/settings.local.php';
}
