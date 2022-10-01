/*                                                                -*- C -*-
   +----------------------------------------------------------------------+
   | PHP Version 7                                                        |
   +----------------------------------------------------------------------+
   | Copyright (c) 1997-2018 The PHP Group                                |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Author: Stig Sæther Bakken <ssb@php.net>                             |
   +----------------------------------------------------------------------+
*/

#define CONFIGURE_COMMAND " './configure'  '--prefix=/opt/moodle-3.10.0-0/php' '--enable-fpm' '--with-fpm-user=daemon' '--with-fpm-group=daemon' '--with-apxs2=/opt/moodle-3.10.0-0/apache2/bin/apxs' '--with-zlib-dir=/opt/moodle-3.10.0-0/common' '--enable-mbstring=all' '--enable-soap' '--enable-bcmath' '--enable-ftp' '--with-xmlrpc' '--enable-cgi' '--with-imap=/bitnami/lamp73stack-linux-x64/src/imap-2007f' '--with-imap-ssl=/opt/moodle-3.10.0-0/common' '--with-png-dir=/opt/moodle-3.10.0-0/common' '--with-gd' '--with-zlib' '--with-curl=/opt/moodle-3.10.0-0/common' '--with-jpeg-dir=/opt/moodle-3.10.0-0/common' '--enable-exif' '--with-openssl=/opt/moodle-3.10.0-0/common' '--enable-calendar' '--enable-ctype' '--enable-pcntl' '--enable-session' '--enable-zip' '--with-bz2=/opt/moodle-3.10.0-0/common' '--enable-sockets' '--with-mcrypt=/opt/moodle-3.10.0-0/common' '--with-icu-dir=/opt/moodle-3.10.0-0/common' '--with-tidy=/opt/moodle-3.10.0-0/common' '--with-mysqli=mysqlnd' '--with-pdo-mysql=mysqlnd' '--with-pdo_sqlite=/bitnami/lamp73stack-linux-x64/output/sqlite' '--with-sqlite3=/bitnami/lamp73stack-linux-x64/output/sqlite' '--with-iconv=/opt/moodle-3.10.0-0/common' '--with-libxml-dir=/opt/moodle-3.10.0-0/common' '--with-xsl=/opt/moodle-3.10.0-0/common' '--enable-mbstring' '--with-freetype-dir=/opt/moodle-3.10.0-0/common' '--with-gmp=/opt/moodle-3.10.0-0/common' '--with-gettext' '--enable-intl' '--with-readline=/opt/moodle-3.10.0-0/common' '--with-libzip=/opt/moodle-3.10.0-0/common' '--with-ldap=/opt/moodle-3.10.0-0/common' '--disable-huge-code-pages'"
#define PHP_ADA_INCLUDE		""
#define PHP_ADA_LFLAGS		""
#define PHP_ADA_LIBS		""
#define PHP_APACHE_INCLUDE	""
#define PHP_APACHE_TARGET	""
#define PHP_FHTTPD_INCLUDE      ""
#define PHP_FHTTPD_LIB          ""
#define PHP_FHTTPD_TARGET       ""
#define PHP_CFLAGS		"$(CFLAGS_CLEAN) "
#define PHP_DBASE_LIB		""
#define PHP_BUILD_DEBUG		""
#define PHP_GDBM_INCLUDE	""
#define PHP_IBASE_INCLUDE	""
#define PHP_IBASE_LFLAGS	""
#define PHP_IBASE_LIBS		""
#define PHP_IFX_INCLUDE		""
#define PHP_IFX_LFLAGS		""
#define PHP_IFX_LIBS		""
#define PHP_INSTALL_IT		"$(mkinstalldirs) '$(INSTALL_ROOT)/opt/moodle-3.10.0-0/apache2/modules' &&                 $(mkinstalldirs) '$(INSTALL_ROOT)/opt/moodle-3.10.0-0/apache2/conf' &&                  /opt/moodle-3.10.0-0/apache2/bin/apxs -S LIBEXECDIR='$(INSTALL_ROOT)/opt/moodle-3.10.0-0/apache2/modules'                        -S SYSCONFDIR='$(INSTALL_ROOT)/opt/moodle-3.10.0-0/apache2/conf'                        -i -a -n php7 libphp7.la"
#define PHP_IODBC_INCLUDE	""
#define PHP_IODBC_LFLAGS	""
#define PHP_IODBC_LIBS		""
#define PHP_MSQL_INCLUDE	""
#define PHP_MSQL_LFLAGS		""
#define PHP_MSQL_LIBS		""
#define PHP_MYSQL_INCLUDE	"@MYSQL_INCLUDE@"
#define PHP_MYSQL_LIBS		"@MYSQL_LIBS@"
#define PHP_MYSQL_TYPE		"@MYSQL_MODULE_TYPE@"
#define PHP_ODBC_INCLUDE	""
#define PHP_ODBC_LFLAGS		""
#define PHP_ODBC_LIBS		""
#define PHP_ODBC_TYPE		""
#define PHP_OCI8_SHARED_LIBADD 	""
#define PHP_OCI8_DIR			""
#define PHP_OCI8_ORACLE_VERSION		""
#define PHP_ORACLE_SHARED_LIBADD 	"@ORACLE_SHARED_LIBADD@"
#define PHP_ORACLE_DIR				"@ORACLE_DIR@"
#define PHP_ORACLE_VERSION			"@ORACLE_VERSION@"
#define PHP_PGSQL_INCLUDE	""
#define PHP_PGSQL_LFLAGS	""
#define PHP_PGSQL_LIBS		""
#define PHP_PROG_SENDMAIL	"/usr/bin/sendmail"
#define PHP_SOLID_INCLUDE	""
#define PHP_SOLID_LIBS		""
#define PHP_EMPRESS_INCLUDE	""
#define PHP_EMPRESS_LIBS	""
#define PHP_SYBASE_INCLUDE	""
#define PHP_SYBASE_LFLAGS	""
#define PHP_SYBASE_LIBS		""
#define PHP_DBM_TYPE		""
#define PHP_DBM_LIB		""
#define PHP_LDAP_LFLAGS		""
#define PHP_LDAP_INCLUDE	""
#define PHP_LDAP_LIBS		""
#define PEAR_INSTALLDIR         "/opt/moodle-3.10.0-0/php/lib/php"
#define PHP_INCLUDE_PATH	".:/opt/moodle-3.10.0-0/php/lib/php"
#define PHP_EXTENSION_DIR       "/opt/moodle-3.10.0-0/php/lib/php/extensions"
#define PHP_PREFIX              "/opt/moodle-3.10.0-0/php"
#define PHP_BINDIR              "/opt/moodle-3.10.0-0/php/bin"
#define PHP_SBINDIR             "/opt/moodle-3.10.0-0/php/sbin"
#define PHP_MANDIR              "/opt/moodle-3.10.0-0/php/php/man"
#define PHP_LIBDIR              "/opt/moodle-3.10.0-0/php/lib/php"
#define PHP_DATADIR             "/opt/moodle-3.10.0-0/php/share/php"
#define PHP_SYSCONFDIR          "/opt/moodle-3.10.0-0/php/etc"
#define PHP_LOCALSTATEDIR       "/opt/moodle-3.10.0-0/php/var"
#define PHP_CONFIG_FILE_PATH    "/opt/moodle-3.10.0-0/php/lib"
#define PHP_CONFIG_FILE_SCAN_DIR    ""
#define PHP_SHLIB_SUFFIX        "so"
#define PHP_SHLIB_EXT_PREFIX    ""
