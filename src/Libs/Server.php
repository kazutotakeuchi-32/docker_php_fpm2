<?php
namespace App\Libs; 


class Server {

  public static function validRefeare($path) {

    $url = parse_url($_ENV["BASE_URL"] .  "/" . $path) ;
    $referer = $_SERVER['HTTP_REFERER']; 
    $requestUrl = parse_url($referer);
    return self::checkUrl($requestUrl, $url) ;
  }

  public static function checkUrl($requestUrl, $url) {
    return HelperFunction::equal($requestUrl["host"], $url["host"]) && HelperFunction::equal( $requestUrl["path"], $url["path"]);
  }

  public static function checkHttpMethod($requestMethod, $method) {
    return  HelperFunction::equal($requestMethod, $method);
  }

  public static function getHttpMethod(){
    return $_SERVER["REQUEST_METHOD"];
  }

}