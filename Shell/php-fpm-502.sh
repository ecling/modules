#!/bin/bash
CheckURL="http://www.highqualitybuy.com/"
STATUS_CODE=`curl -o /dev/null -m 10 --connect-timeout 10 -s -w %{http_code} $CheckURL`
#echo "$CheckURL Status Code:$STATUS_CODE"
if [ "$STATUS_CODE" = "502" ]; then
	service php-fpm restart
	echo "`date +%F' '%T` ----- $STATUS_CODE">>/usr/local/var/log/php-fpm-502.log
fi
