#!/bin/bash
#MAIL=angara99@gmail.com


function price_insert {
    #echo "Script started successfully"
    if (/usr/bin/php /home/manhee/zapchastiporter.ru/admin/price/price.php;); then
        echo "Site price has inserted zapchastiporter.ru insert  success"
    else
      echo "Check me on 192.168.0.76 Office Server Please" | /usr/bin/mail -s "Problem Zapchastiporter.ru Price has NOT insertedi!" angara99@gmail.com
      echo "Error: Price didn't inserted!"
    fi
}
price_insert 
