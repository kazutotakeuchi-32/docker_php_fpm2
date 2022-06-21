<?php
namespace App\Libs;
require_once "vendor/autoload.php";

class Session {
  public static function start() {
    if (session_id() == '') {
      session_start();
    }
  }

  public static function end() {
    if (session_id() != '') {
      session_destroy();
    }
  }

  public static function set($key, $value) {
    $_SESSION[$key] = $value;
  }

}


