#!/bin/sh

if [ $# -eq 1 ]
then
   filename="$1"
else
   filename="release"
fi

#echo $filename


/data1/app/services/php553/bin/php /data1/www/dev-fb-vikingage.shinezone.com/www/$filename/v20130228/j7/app/ACTION/game/exportZIP.php