#!/bin/bash
HOST="datafeeds.shareasale.com"  #This is the FTP servers host or IP address.
USER="Cherry@HQB"            #This is the FTP user that has access to the server.
PASS="SXb1kc9d"          #This is the password for the FTP user.
#Call 1. Uses the ftp command with the -inv switches.
#-i turns off interactive prompting.
#-n Restrains FTP from attempting the auto-login feature.
#-v enables verbose and progress.
#zip -r /var/www/html/feed/Shareasale.zip /var/www/html/feed/Shareasale.csv
ftp -inv $HOST <<EOF
user $USER $PASS
binary
put "/var/www/html/feed/Shareasale.zip" "/merchantuploads/60234/Shareasale.zip"
bye
EOF