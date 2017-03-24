#!/bin/bash
#This is a kill mysql's sleep process script
mysql="mysql"
passwd='llrmm9510'
for id in `$mysql -p$passwd -e "show processlist"|awk '/Sleep/{if($6>10)print $1}'`
do
$mysql -p$passwd -e "kill $id"
echo `date +"%F %T"` "kill $id" >> /var/log/mysql_kill_sleep.log
done
