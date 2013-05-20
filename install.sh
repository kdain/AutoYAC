#!/bin/bash
echo Installing AutoYAC
echo
echo
echo Please do this ONE time Only, as it will add multible crontab entries.
echo If you do, it is easily fixed by crontab -e.
echo
echo

cp source-Send_to_AutoYAC.php /var/www/html/admin/modules/superfecta/bin
cp bcid /bin
cp getlist /bin
chmod +x /bin/bcid
chmod +x /bin/getlist
#
#  *** Edit the line below to suit yourself ***
#
newline="04 * * * * /bin/getlist"
(crontab -l; echo "$newline") | crontab -

echo Done.

