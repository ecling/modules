#!/bin/sh 
#check memcached process and restart if down
DATE=`date -d "today" +"%Y-%m-%d-%H:%M"`
MM=`ps aux |grep "memcached" |grep "12000" |grep -v "grep" |wc -l`
if [ "$MM" == "0" ]; then
 echo "$DATE The memcached is problem and restart" >> /var/log/memcached/memcached_check.logs
/usr/local/bin/memcached -d -m 4096 -u root -l 10.143.85.16 -p 12000 -c 1024 -P /tmp/memcached.d
else
echo "$DATE The memcached is ok" >>/var/log/memcached/memcached_check.logs
fi
