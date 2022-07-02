<?php 
namespace App\Model;
use Libs\Db;

class User extends ModelBase
 {
  public static $table = "users";
  public static $primary_key = "id";
  public static $columns = [ "name", "email", "password"] ;

  public static function findByEmail($email) {
    try {
      $db = Db::connect();
      $sql = "SELECT * FROM " . static::$table . " WHERE email = :email";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(":email", $email);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
      throw $th;
    }
  }

}


