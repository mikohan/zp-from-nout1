<?php
if (DEVELOPMENT){
error_reporting(E_ALL);
ini_set("display_errors", 1);
}
require_once '../app/init.php';
require_once '../app/lib/func.php';

$today = date("Ymd") - 1;
$fuck = strtotime($today);
$LastModified_unix = $fuck; // время последнего изменения страницы

$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE']))
    $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
    $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModified_unix) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
    exit;
}
header('Last-Modified: '. $LastModified);



//Здесь добавляем слэш на конец урл
$uri = preg_replace("/\?.*/i",'', $_SERVER['REQUEST_URI']);

if (strlen($uri)>1) {// если не главная страница...
  if (rtrim($uri,'/')."/"!=$uri) {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: https://'.$_SERVER['SERVER_NAME'].str_replace($uri, $uri.'/', $_SERVER['REQUEST_URI']));
    exit();
  }
}

$app = new App;
