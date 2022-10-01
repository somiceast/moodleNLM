#!/bin/sh
echo $PATH | egrep "/opt/moodle-3.10.0-0/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/opt/moodle-3.10.0-0/sqlite/bin:/opt/moodle-3.10.0-0/php/bin:/opt/moodle-3.10.0-0/mysql/bin:/opt/moodle-3.10.0-0/letsencrypt/:/opt/moodle-3.10.0-0/apache2/bin:/opt/moodle-3.10.0-0/common/bin:$PATH"
export PATH
fi
echo $LD_LIBRARY_PATH | egrep "/opt/moodle-3.10.0-0/common" > /dev/null
if [ $? -ne 0 ] ; then
LD_LIBRARY_PATH="/opt/moodle-3.10.0-0/sqlite/lib:/opt/moodle-3.10.0-0/mysql/lib:/opt/moodle-3.10.0-0/apache2/lib:/opt/moodle-3.10.0-0/common/lib:/opt/moodle-3.10.0-0/common/lib64${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}"
export LD_LIBRARY_PATH
fi

TERMINFO=/opt/moodle-3.10.0-0/common/share/terminfo
export TERMINFO
##### SQLITE ENV #####
			
SASL_CONF_PATH=/opt/moodle-3.10.0-0/common/etc
export SASL_CONF_PATH
SASL_PATH=/opt/moodle-3.10.0-0/common/lib/sasl2 
export SASL_PATH
LDAPCONF=/opt/moodle-3.10.0-0/common/etc/openldap/ldap.conf
export LDAPCONF
##### PHP ENV #####
PHP_PATH=/opt/moodle-3.10.0-0/php/bin/php
COMPOSER_HOME=/opt/moodle-3.10.0-0/php/composer
export PHP_PATH
export COMPOSER_HOME
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/opt/moodle-3.10.0-0/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/opt/moodle-3.10.0-0/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/opt/moodle-3.10.0-0/common/openssl/openssl.cnf
export OPENSSL_CONF
OPENSSL_ENGINES=/opt/moodle-3.10.0-0/common/lib/engines
export OPENSSL_ENGINES


. /opt/moodle-3.10.0-0/scripts/build-setenv.sh
