<?php
namespace App\Libs;

class Db
{
 
  public static function connect()
  {
    try {
      $dsn = "mysql:dbname=test;host=db;charset=utf8mb4";
      $user = "root";
      $password = "password";
      $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
      ];
      $dbh = new \PDO($dsn, $user, $password, $options);
      return $dbh;
    } catch (\Throwable $th) {
      throw $th;
      var_dump($th);
    }
  }

  // デバック用
 
  private static function showTables() {
    try {
      $db = static::connect();
      $sql = "SHOW TABLES" ;
      $stmt = $db->prepare($sql);
      $stmt->execute();
      $output = $stmt->fetchAll();
      return $output;
    } catch (\Throwable $th) {
      throw $th;
    }
  }

}