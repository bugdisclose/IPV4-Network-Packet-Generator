<?php
system("ps -axm | grep apache2 > stopps.txt");
system("cut -d ' ' -f 1 stopps.txt > stopkill.txt");

$data = fopen("stopkill.txt", "r");
$a = fgets($data);
system("kill $a");
$a = fgets($data);
system("kill $a");

fclose($data);
system("sudo service apache2 start");
echo "started";
sleep(5);
header("ipv4.html");
?>