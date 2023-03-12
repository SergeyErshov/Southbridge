<?php
$c_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo 'client ip is ' . $c_ip;
phpinfo(); 
?>
