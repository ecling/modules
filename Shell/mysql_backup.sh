#!/bin/bash
user='root';
date=`date +%Y-%m-%d`;
backup_dir='/var/www/hqbbackup/';
backup_file=""$backup_dir"hqbshop-"$date".sql";
mysqldump --defaults-file=/etc/my.cnf.d/my.cnf -u$user hqbshop>$backup_file

