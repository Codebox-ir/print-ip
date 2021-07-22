<?php

/**
 * Get IP
 */ 
function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return ($ip) ?? false;
}

$ip = getIP();
$type = $_GET['v'] ?? false;

if($type==4) {
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) echo $ip;
} else if ($type==6) {
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) echo $ip;
} else {
    echo $ip;
}

PHP_EOL;
exit;
