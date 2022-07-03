<?php
namespace App\Libs;

class HelperFunction
{
  public static function equal($x, $y)
  {
    return $x === $y;
  }

  public static function addition($x, $y)
  {
    return $x + $y;
  }

  public static function moderation($x, $y)
  {
    return $x - $y;
  }

  public static function multiply($x, $y)
  {
    return $x * $y;
  }

  public static function division($x, $y)
  {
    return $x / $y;
  }
}
