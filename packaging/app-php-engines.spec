
Name: app-php-engines
Epoch: 1
Version: 1.1.8
Release: 1%{dist}
Summary: PHP Engines
License: GPLv3
Group: Applications/Apps
Packager: eGloo
Vendor: WikiSuite
Source: %{name}-%{version}.tar.gz
Buildarch: noarch
Requires: %{name}-core = 1:%{version}-%{release}
Requires: app-base
Requires: app-web-server

%description
With PHP Engines, an administrator can select the PHP version to run inside each web server virtual host.

%package core
Summary: PHP Engines - API
License: LGPLv3
Group: Applications/API
Requires: app-base-core
Requires: app-base-core >= 1:2.4.19
Requires: app-date-core
Requires: app-events-core
Requires: app-php-engines-core
Requires: app-php-core >= 1:2.3.2
Requires: app-web-server-core >= 1:2.4.0
Requires: app-flexshare-core >= 1:2.4.10
Requires: clearos-base >= 7.0.2
Requires: rh-php56-php-bcmath
Requires: rh-php56-php-cli
Requires: rh-php56-php-common
Requires: rh-php56-php-fpm
Requires: rh-php56-php-gd
Requires: rh-php56-php-intl
Requires: rh-php56-php-ldap
Requires: rh-php56-php-mbstring
Requires: rh-php56-php-pecl-memcache
Requires: rh-php56-php-mysqlnd
Requires: rh-php56-php-opcache
Requires: rh-php56-php-pdo
Requires: rh-php56-php-pear
Requires: rh-php56-php-soap
Requires: rh-php56-php-xml
Requires: rh-php56-php-xmlrpc
Requires: rh-php70-php-bcmath
Requires: rh-php70-php-cli
Requires: rh-php70-php-common
Requires: rh-php70-php-fpm
Requires: rh-php70-php-gd
Requires: rh-php70-php-intl
Requires: rh-php70-php-ldap
Requires: rh-php70-php-mbstring
Requires: rh-php70-php-mysqlnd
Requires: rh-php70-php-opcache
Requires: rh-php70-php-pdo
Requires: rh-php70-php-pear
Requires: rh-php70-php-soap
Requires: rh-php70-php-xml
Requires: rh-php71-php-bcmath
Requires: rh-php71-php-cli
Requires: rh-php71-php-common
Requires: rh-php71-php-fpm
Requires: rh-php71-php-gd
Requires: rh-php71-php-gmp
Requires: rh-php71-php-intl
Requires: rh-php71-php-json
Requires: rh-php71-php-ldap
Requires: rh-php71-php-mbstring
Requires: rh-php71-php-mysqlnd
Requires: rh-php71-php-opcache
Requires: rh-php71-php-pdo
Requires: rh-php71-php-pear
Requires: rh-php71-php-process
Requires: rh-php71-php-soap
Requires: rh-php71-php-xml
Requires: rh-php71-php-zip
Requires: php72-php-bcmath
Requires: php72-php-cli
Requires: php72-php-common
Requires: php72-php-fpm
Requires: php72-php-gd
Requires: php72-php-gmp
Requires: php72-php-intl
Requires: php72-php-json
Requires: php72-php-ldap
Requires: php72-php-mbstring
Requires: php72-php-mysqlnd
Requires: php72-php-opcache
Requires: php72-php-pdo
Requires: php72-php-pear
Requires: php72-php-process
Requires: php72-php-soap
Requires: php72-php-xml
Requires: php72-php-zip
Requires: php73-php-bcmath
Requires: php73-php-cli
Requires: php73-php-common
Requires: php73-php-fpm
Requires: php73-php-gd
Requires: php73-php-gmp
Requires: php73-php-intl
Requires: php73-php-json
Requires: php73-php-ldap
Requires: php73-php-mbstring
Requires: php73-php-mysqlnd
Requires: php73-php-opcache
Requires: php73-php-pdo
Requires: php73-php-pear
Requires: php73-php-process
Requires: php73-php-soap
Requires: php73-php-xml
Requires: php73-php-zip
Requires: php74-php-bcmath
Requires: php74-php-cli
Requires: php74-php-common
Requires: php74-php-fpm
Requires: php74-php-gd
Requires: php74-php-gmp
Requires: php74-php-intl
Requires: php74-php-json
Requires: php74-php-ldap
Requires: php74-php-mbstring
Requires: php74-php-mysqlnd
Requires: php74-php-opcache
Requires: php74-php-pdo
Requires: php74-php-pear
Requires: php74-php-process
Requires: php74-php-soap
Requires: php74-php-xml
Requires: php74-php-zip
Requires: php83-php-bcmath
Requires: php83-php-cli
Requires: php83-php-common
Requires: php83-php-fpm
Requires: php83-php-gd
Requires: php83-php-gmp
Requires: php83-php-intl
Requires: php83-php-json
Requires: php83-php-ldap
Requires: php83-php-mbstring
Requires: php83-php-mysqlnd
Requires: php83-php-opcache
Requires: php83-php-pdo
Requires: php83-php-pear
Requires: php83-php-process
Requires: php83-php-soap
Requires: php83-php-xml
Requires: php83-php-zip

%description core
With PHP Engines, an administrator can select the PHP version to run inside each web server virtual host.

This package provides the core API and libraries.

%prep
%setup -q
%build

%install
mkdir -p -m 755 %{buildroot}/usr/clearos/apps/php_engines
cp -r * %{buildroot}/usr/clearos/apps/php_engines/
rm -f %{buildroot}/usr/clearos/apps/php_engines/README.md
rm -f %{buildroot}/usr/clearos/apps/php_engines/packaging/LICENSE-API.txt
rm -f %{buildroot}/usr/clearos/apps/php_engines/packaging/LICENSE.txt

install -d -m 0755 %{buildroot}/var/clearos/php_engines
install -d -m 0755 %{buildroot}/var/clearos/php_engines/backup
install -d -m 0755 %{buildroot}/var/clearos/php_engines/state
install -D -m 0644 packaging/apache-php_engines_path.conf %{buildroot}/etc/httpd/conf.d/php_engines_path.conf
install -D -m 0755 packaging/date-event %{buildroot}/var/clearos/events/date/php_engines
install -D -m 0644 packaging/php_engines.conf %{buildroot}/etc/clearos/php_engines.conf
install -D -m 0755 packaging/php_wrapper %{buildroot}/usr/clearos/bin/php
install -D -m 0644 packaging/rh-php56-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php56-php-fpm.php
install -D -m 0644 packaging/rh-php70-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php70-php-fpm.php
install -D -m 0644 packaging/rh-php71-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php71-php-fpm.php
install -D -m 0644 packaging/rh-php72-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php72-php-fpm.php
install -D -m 0644 packaging/rh-php73-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php73-php-fpm.php
install -D -m 0644 packaging/rh-php74-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php74-php-fpm.php
install -D -m 0644 packaging/rh-php83-php-fpm.php %{buildroot}/var/clearos/base/daemon/rh-php83-php-fpm.php
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php56/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php70/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php71/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php72/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php73/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php74/php-fpm.d/www_path.conf
install -D -m 0644 packaging/www_path.conf %{buildroot}/etc/opt/rh/rh-php83/php-fpm.d/www_path.conf

%post
logger -p local6.notice -t installer 'app-php-engines - installing'

%post core
logger -p local6.notice -t installer 'app-php-engines-api - installing'

if [ $1 -eq 1 ]; then
    [ -x /usr/clearos/apps/php_engines/deploy/install ] && /usr/clearos/apps/php_engines/deploy/install
fi

[ -x /usr/clearos/apps/php_engines/deploy/upgrade ] && /usr/clearos/apps/php_engines/deploy/upgrade

exit 0

%preun
if [ $1 -eq 0 ]; then
    logger -p local6.notice -t installer 'app-php-engines - uninstalling'
fi

%preun core
if [ $1 -eq 0 ]; then
    logger -p local6.notice -t installer 'app-php-engines-api - uninstalling'
    [ -x /usr/clearos/apps/php_engines/deploy/uninstall ] && /usr/clearos/apps/php_engines/deploy/uninstall
fi

exit 0

%files
%defattr(-,root,root)
%doc packaging/LICENSE.txt
/usr/clearos/apps/php_engines/controllers
/usr/clearos/apps/php_engines/htdocs
/usr/clearos/apps/php_engines/views

%files core
%defattr(-,root,root)
%doc README.md
%doc packaging/LICENSE-API.txt
%exclude /usr/clearos/apps/php_engines/packaging
%exclude /usr/clearos/apps/php_engines/unify.json
%dir /usr/clearos/apps/php_engines
%dir /var/clearos/php_engines
%dir /var/clearos/php_engines/backup
%dir /var/clearos/php_engines/state
/usr/clearos/apps/php_engines/deploy
/usr/clearos/apps/php_engines/language
/usr/clearos/apps/php_engines/libraries
%config(noreplace) /etc/httpd/conf.d/php_engines_path.conf
/var/clearos/events/date/php_engines
%config(noreplace) /etc/clearos/php_engines.conf
/usr/clearos/bin/php
/var/clearos/base/daemon/rh-php56-php-fpm.php
/var/clearos/base/daemon/rh-php70-php-fpm.php
/var/clearos/base/daemon/rh-php71-php-fpm.php
/var/clearos/base/daemon/rh-php72-php-fpm.php
/var/clearos/base/daemon/rh-php73-php-fpm.php
/var/clearos/base/daemon/rh-php74-php-fpm.php
%config(noreplace) /etc/opt/rh/rh-php56/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php70/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php71/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php72/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php73/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php74/php-fpm.d/www_path.conf
%config(noreplace) /etc/opt/rh/rh-php83/php-fpm.d/www_path.conf
