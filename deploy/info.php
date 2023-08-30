<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'php_engines';
$app['version'] = '1.3.0';
$app['release'] = '1';
$app['vendor'] = 'WikiSuite';
$app['packager'] = 'ClearFoundation';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('php_engines_app_description');
$app['powered_by'] = array(
    'vendor' => array(
        'name' => 'PHP',
        'url' => 'http://php.net',
    ),
);

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('php_engines_app_name');
$app['category'] = lang('base_category_server');
$app['subcategory'] = lang('base_subcategory_web');

/////////////////////////////////////////////////////////////////////////////
// Controllers
/////////////////////////////////////////////////////////////////////////////

$app['controllers']['php_engines']['title'] = $app['name'];
$app['controllers']['settings']['title'] = lang('base_settings');
$app['controllers']['policy']['title'] = lang('base_app_policy');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['requires'] = array(
    'app-web-server'
);

$app['core_requires'] = array(
    'app-base-core >= 1:2.4.19',
    'app-date-core',
    'app-events-core',
    'app-php-engines-core',
    'app-php-core >= 1:2.3.2',
    'app-web-server-core >= 1:2.4.0',
    'app-flexshare-core >= 1:2.4.10',
    'clearos-base >= 7.0.2',
    'rh-php70',
    'rh-php70-php-bcmath',
    'rh-php70-php-fpm',
    'rh-php70-php-gd',
    'rh-php70-php-intl',
    'rh-php70-php-ldap',
    'rh-php70-php-mbstring',
    'rh-php70-php-mysqlnd',
    'rh-php70-php-opcache',
    'rh-php70-php-pdo',
    'rh-php70-php-soap',
    'rh-php71',
    'rh-php71-php-bcmath',
    'rh-php71-php-fpm',
    'rh-php71-php-gd',
    'rh-php71-php-gmp',
    'rh-php71-php-intl',
    'rh-php71-php-ldap',
    'rh-php71-php-mbstring',
    'rh-php71-php-mysqlnd',
    'rh-php71-php-opcache',
    'rh-php71-php-pdo',
    'rh-php71-php-soap',
    'rh-php72',
    'rh-php72-php-bcmath',
    'rh-php72-php-fpm',
    'rh-php72-php-gd',
    'rh-php72-php-gmp',
    'rh-php72-php-intl',
    'rh-php72-php-ldap',
    'rh-php72-php-mbstring',
    'rh-php72-php-mysqlnd',
    'rh-php72-php-opcache',
    'rh-php72-php-pdo',
    'rh-php72-php-soap',
    'rh-php73',
    'rh-php73-php-bcmath',
    'rh-php73-php-fpm',
    'rh-php73-php-gd',
    'rh-php73-php-gmp',
    'rh-php73-php-intl',
    'rh-php73-php-ldap',
    'rh-php73-php-mbstring',
    'rh-php73-php-mysqlnd',
    'rh-php73-php-opcache',
    'rh-php73-php-pdo',
    'rh-php73-php-soap',
    'php74',
    'php74-php-bcmath',
    'php74-php-fpm',
    'php74-php-gd',
    'php74-php-gmp',
    'php74-php-intl',
    'php74-php-ldap',
    'php74-php-mbstring',
    'php74-php-mysqlnd',
    'php74-php-opcache',
    'php74-php-pdo',
    'php74-php-soap',

);

$app['core_directory_manifest'] = array(
    '/var/clearos/php_engines' => array(),
    '/var/clearos/php_engines/backup' => array(),
    '/var/clearos/php_engines/state' => array()
);

$app['core_file_manifest'] = array(
    'rh-php70-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php70-php-fpm.php'),
    'rh-php71-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php71-php-fpm.php'),
    'rh-php72-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php72-php-fpm.php'),
    'rh-php73-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php73-php-fpm.php'),
    'rh-php74-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php74-php-fpm.php'),
    'apache-php_engines_path.conf' => array(
        'target' => '/etc/httpd/conf.d/php_engines_path.conf',
        'config' => TRUE,
        'config_params' => 'noreplace'
    ),
    'date-event'=> array(
        'target' => '/var/clearos/events/date/php_engines',
        'mode' => '0755'
    ),
    'php_engines.conf' => array (
        'target' => '/etc/clearos/php_engines.conf',
        'config' => TRUE,
        'config_params' => 'noreplace',
    ),
    'php_wrapper'=> array(
        'target' => '/usr/clearos/bin/php',
        'mode' => '0755'
    ),
    'www_path.conf' => array(
        'target' => [
            '/etc/opt/rh/rh-php70/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php71/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php72/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php73/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php74/php-fpm.d/www_path.conf',

        ],
        'config' => TRUE,
        'config_params' => 'noreplace',
    ),
);

$app['delete_dependency'] = array(
    'app-php-engines-core',
);
