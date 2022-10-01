#!/bin/sh
cd $1
if ! [ -e tmp ] ;then
  mkdir tmp
fi
chmod 777 tmp

bin/mysqld --port=3307 --socket=/opt/moodle-3.10.0-0/mysql/tmp/mysql.sock  --datadir=/opt/moodle-3.10.0-0/mysql/data --pid-file=/opt/moodle-3.10.0-0/mysql/data/mysqld.pid --lower-case-table-names=1 --initialize-insecure > /dev/null

if [ `uname -s` = "SunOS" ]; then
    U=`id|sed -e s/uid=//g -e s/\(.*//g`
else
    U=`id -u`
fi

if [ $U = 0 ]; then
   chown -R root .
   chgrp -R root .

   # External data directory - T3532
   cd /opt/moodle-3.10.0-0/mysql/data
   chown -R mysql .
   chgrp -R root .
   cd $1
fi



/opt/moodle-3.10.0-0/mysql/scripts/ctl.sh start mysql > /dev/null
sleep 10
bin/mysql -S /opt/moodle-3.10.0-0/mysql/tmp/mysql.sock -u root -e "DELETE FROM mysql.user WHERE User='';"
bin/mysql -S /opt/moodle-3.10.0-0/mysql/tmp/mysql.sock -u root -e "CREATE USER 'root'@'127.0.0.1' IDENTIFIED BY '$2';"
bin/mysql -S /opt/moodle-3.10.0-0/mysql/tmp/mysql.sock -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'127.0.0.1' WITH GRANT OPTION;"
bin/mysql -S /opt/moodle-3.10.0-0/mysql/tmp/mysql.sock -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$2';"
