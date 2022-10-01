#!/bin/sh
LDFLAGS="-L/opt/moodle-3.10.0-0/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/opt/moodle-3.10.0-0/common/include $CFLAGS"
export CFLAGS
CXXFLAGS="-I/opt/moodle-3.10.0-0/common/include $CXXFLAGS"
export CXXFLAGS
		    
PKG_CONFIG_PATH="/opt/moodle-3.10.0-0/common/lib64/pkgconfig:/opt/moodle-3.10.0-0/common/lib/pkgconfig"
export PKG_CONFIG_PATH
