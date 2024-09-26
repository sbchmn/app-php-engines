<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'php_engines';
$app['version'] = '1.1.8';
$app['vendor'] = 'WikiSuite';
$app['packager'] = 'eGloo';
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
    'rh-php56-php-bcmath',
    'rh-php56-php-cli',
    'rh-php56-php-common',
    'rh-php56-php-fpm',
    'rh-php56-php-gd',
    'rh-php56-php-intl',
    'rh-php56-php-ldap',
    'rh-php56-php-mbstring',
    'rh-php56-php-pecl-memcache',
    'rh-php56-php-mysqlnd',
    'rh-php56-php-opcache',
    'rh-php56-php-pdo',
    'rh-php56-php-pear',
    'rh-php56-php-soap',
    'rh-php56-php-xml',
    'rh-php56-php-xmlrpc',
    'rh-php70-php-bcmath',
    'rh-php70-php-cli',
    'rh-php70-php-common',
    'rh-php70-php-fpm',
    'rh-php70-php-gd',
    'rh-php70-php-intl',
    'rh-php70-php-ldap',
    'rh-php70-php-mbstring',
    'rh-php70-php-mysqlnd',
    'rh-php70-php-opcache',
    'rh-php70-php-pdo',
    'rh-php70-php-pear',
    'rh-php70-php-soap',
    'rh-php70-php-xml',
    'rh-php71-php-bcmath',
    'rh-php71-php-cli',
    'rh-php71-php-common',
    'rh-php71-php-fpm',
    'rh-php71-php-gd',
    'rh-php71-php-gmp',
    'rh-php71-php-intl',
    'rh-php71-php-json',
    'rh-php71-php-ldap',
    'rh-php71-php-mbstring',
    'rh-php71-php-mysqlnd',
    'rh-php71-php-opcache',
    'rh-php71-php-pdo',
    'rh-php71-php-pear',
    'rh-php71-php-process',
    'rh-php71-php-soap',
    'rh-php71-php-xml',
    'rh-php71-php-zip',
    'rh-php72-php-bcmath',
    'rh-php72-php-cli',
    'rh-php72-php-common',
    'rh-php72-php-fpm',
    'rh-php72-php-gd',
    'rh-php72-php-gmp',
    'rh-php72-php-intl',
    'rh-php72-php-json',
    'rh-php72-php-ldap',
    'rh-php72-php-mbstring',
    'rh-php72-php-mysqlnd',
    'rh-php72-php-opcache',
    'rh-php72-php-pdo',
    'rh-php72-php-pear',
    'rh-php72-php-process',
    'rh-php72-php-soap',
    'rh-php72-php-xml',
    'rh-php72-php-zip',
    'rh-php73-php-bcmath',
    'rh-php73-php-cli',
    'rh-php73-php-common',
    'rh-php73-php-fpm',
    'rh-php73-php-gd',
    'rh-php73-php-gmp',
    'rh-php73-php-intl',
    'rh-php73-php-json',
    'rh-php73-php-ldap',
    'rh-php73-php-mbstring',
    'rh-php73-php-mysqlnd',
    'rh-php73-php-opcache',
    'rh-php73-php-pdo',
    'rh-php73-php-pear',
    'rh-php73-php-process',
    'rh-php73-php-soap',
    'rh-php73-php-xml',
    'rh-php73-php-zip',
    'php74-php-bcmath',
    'php74-php-cli',
    'php74-php-common',
    'php74-php-fpm',
    'php74-php-gd',
    'php74-php-gmp',
    'php74-php-intl',
    'php74-php-json',
    'php74-php-ldap',
    'php74-php-mbstring',
    'php74-php-mysqlnd',
    'php74-php-opcache',
    'php74-php-pdo',
    'php74-php-pear',
    'php74-php-process',
    'php74-php-soap',
    'php74-php-xml',
    'php74-php-zip',
    'php83-php-bcmath',
    'php83-php-cli',
    'php83-php-common',
    'php83-php-fpm',
    'php83-php-gd',
    'php83-php-gmp',
    'php83-php-intl',
    'php83-php-json',
    'php83-php-ldap',
    'php83-php-mbstring',
    'php83-php-mysqlnd',
    'php83-php-opcache',
    'php83-php-pdo',
    'php83-php-pear',
    'php83-php-process',
    'php83-php-soap',
    'php83-php-xml',
    'php83-php-zip',
    
);

$app['core_directory_manifest'] = array(
    '/var/clearos/php_engines' => array(),
    '/var/clearos/php_engines/backup' => array(),
    '/var/clearos/php_engines/state' => array()
);

$app['core_file_manifest'] = array(
    'rh-php56-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php56-php-fpm.php'),
    'rh-php70-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php70-php-fpm.php'),
    'rh-php71-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php71-php-fpm.php'),
    'rh-php72-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php72-php-fpm.php'),
    'rh-php73-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php73-php-fpm.php'),
    'rh-php74-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php74-php-fpm.php'),
    'rh-php83-php-fpm.php' => array('target' => '/var/clearos/base/daemon/rh-php83-php-fpm.php'),
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
            '/etc/opt/rh/rh-php56/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php70/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php71/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php73/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php74/php-fpm.d/www_path.conf',
            '/etc/opt/rh/rh-php83/php-fpm.d/www_path.conf'
        ],
        'config' => TRUE,
        'config_params' => 'noreplace',
    ),
);

$app['delete_dependency'] = array(
    'app-php-engines-core',
);
