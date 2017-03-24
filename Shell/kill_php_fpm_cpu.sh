#!/bin/sh
PIDS=`ps aux|grep php-fpm|grep -v grep|awk '{if($3>=20)print $2}'`
for PID in $PIDS
do
echo "`date +%F' '%T` ----- $PID">>/usr/local/var/log/phpkill.log
kill -9 $PID
done
