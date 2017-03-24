#!/bin/bash
##04:00
## nginx log dir
LOGS_PATH=/usr/local/nginx/logs
YESTERDAY=$(date -d "yesterday" +%Y-%m-%d)
mv ${LOGS_PATH}/access.log ${LOGS_PATH}/access_${YESTERDAY}.log
kill -USR1 $(cat /usr/local/nginx/logs/nginx.pid)
