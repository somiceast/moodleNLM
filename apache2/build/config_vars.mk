exp_exec_prefix = /opt/moodle-3.10.0-0/apache2
exp_bindir = /opt/moodle-3.10.0-0/apache2/bin
exp_sbindir = /opt/moodle-3.10.0-0/apache2/bin
exp_libdir = /opt/moodle-3.10.0-0/apache2/lib
exp_libexecdir = /opt/moodle-3.10.0-0/apache2/modules
exp_mandir = /opt/moodle-3.10.0-0/apache2/man
exp_sysconfdir = /opt/moodle-3.10.0-0/apache2/conf
exp_datadir = /opt/moodle-3.10.0-0/apache2
exp_installbuilddir = /opt/moodle-3.10.0-0/apache2/build
exp_errordir = /opt/moodle-3.10.0-0/apache2/error
exp_iconsdir = /opt/moodle-3.10.0-0/apache2/icons
exp_htdocsdir = /opt/moodle-3.10.0-0/apache2/htdocs
exp_manualdir = /opt/moodle-3.10.0-0/apache2/manual
exp_cgidir = /opt/moodle-3.10.0-0/apache2/cgi-bin
exp_includedir = /opt/moodle-3.10.0-0/apache2/include
exp_localstatedir = /opt/moodle-3.10.0-0/apache2
exp_runtimedir = /opt/moodle-3.10.0-0/apache2/logs
exp_logfiledir = /opt/moodle-3.10.0-0/apache2/logs
exp_proxycachedir = /opt/moodle-3.10.0-0/apache2/proxy
EGREP = /bin/grep -E
PCRE_LIBS = -L/opt/moodle-3.10.0-0/common/lib -lpcre
SHLTCFLAGS = -prefer-pic
LTCFLAGS = -prefer-non-pic -static
MKINSTALLDIRS = /opt/moodle-3.10.0-0/apache2/build/mkdir.sh
INSTALL = $(LIBTOOL) --mode=install /opt/moodle-3.10.0-0/apache2/build/install.sh -c
MATH_LIBS = -lm
CRYPT_LIBS = -lcrypt
DTRACE = true
PICFLAGS =
PILDFLAGS =
INSTALL_DSO = yes
ab_CFLAGS = -I/opt/moodle-3.10.0-0/common/include
ab_LIBS = -L/opt/moodle-3.10.0-0/common/lib -lssl -lcrypto -lrt -lcrypt -lpthread
NONPORTABLE_SUPPORT = checkgid fcgistarter
progname = httpd
OS = unix
SHLIBPATH_VAR = LD_LIBRARY_PATH
INSTALL_SUEXEC = setuid
AP_BUILD_SRCLIB_DIRS =
AP_CLEAN_SRCLIB_DIRS =
HTTPD_VERSION = 2.4.46
HTTPD_MMN = 20120211
bindir = ${exec_prefix}/bin
sbindir = ${exec_prefix}/bin
cgidir = ${datadir}/cgi-bin
logfiledir = ${localstatedir}/logs
exec_prefix = ${prefix}
datadir = ${prefix}
localstatedir = ${prefix}
mandir = ${prefix}/man
libdir = ${exec_prefix}/lib
libexecdir = ${exec_prefix}/modules
htdocsdir = ${datadir}/htdocs
manualdir = ${datadir}/manual
includedir = ${prefix}/include
errordir = ${datadir}/error
iconsdir = ${datadir}/icons
sysconfdir = ${prefix}/conf
installbuilddir = ${datadir}/build
runtimedir = ${localstatedir}/logs
proxycachedir = ${localstatedir}/proxy
other_targets =
progname = httpd
prefix = /opt/moodle-3.10.0-0/apache2
AWK = gawk
CC = gcc -std=gnu99
CPP = gcc -E
CXX =
CPPFLAGS = -I/opt/moodle-3.10.0-0/common/include
CFLAGS = -I/bitnami/lamp73stack-linux-x64/output/mysql/include -I/opt/moodle-3.10.0-0/common/include -fPIC -m64
CXXFLAGS =
LTFLAGS = --silent
LDFLAGS = -L/opt/moodle-3.10.0-0/common/lib -liconv
LT_LDFLAGS =
SH_LDFLAGS =
LIBS =
DEFS =
INCLUDES =
NOTEST_CPPFLAGS =
NOTEST_CFLAGS =
NOTEST_CXXFLAGS =
NOTEST_LDFLAGS =
NOTEST_LIBS =
EXTRA_CPPFLAGS = -DLINUX -D_REENTRANT -D_GNU_SOURCE
EXTRA_CFLAGS = -pthread
EXTRA_CXXFLAGS =
EXTRA_LDFLAGS = -L/opt/moodle-3.10.0-0/common//lib
EXTRA_LIBS =
EXTRA_INCLUDES = -I$(includedir) -I. -I/opt/moodle-3.10.0-0/common/include/apr-1 -I/opt/moodle-3.10.0-0/common/include
INTERNAL_CPPFLAGS =
LIBTOOL = /opt/moodle-3.10.0-0/common/build-1/libtool --silent
SHELL = /bin/sh
RSYNC =
SH_LIBS =
SH_LIBTOOL = $(LIBTOOL)
MK_IMPLIB =
MKDEP = $(CC) -MM
INSTALL_PROG_FLAGS =
ENABLED_DSO_MODULES = ,authn_file,authn_core,authz_host,authz_groupfile,authz_user,authz_core,access_compat,auth_basic,reqtimeout,filter,mime,log_config,env,headers,setenvif,version,unixd,status,autoindex,dir,alias
LOAD_ALL_MODULES = no
APR_BINDIR = /opt/moodle-3.10.0-0/common/bin
APR_INCLUDEDIR = /opt/moodle-3.10.0-0/common/include/apr-1
APR_VERSION = 1.6.2
APR_CONFIG = /opt/moodle-3.10.0-0/common/bin/apr-1-config
APU_BINDIR = /opt/moodle-3.10.0-0/common/bin
APU_INCLUDEDIR = /opt/moodle-3.10.0-0/common/include/apr-1
APU_VERSION = 1.6.0
APU_CONFIG = /opt/moodle-3.10.0-0/common/bin/apu-1-config
