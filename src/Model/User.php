<?php 
namespace App\Model;
use Libs\Db;
use Libs\Validator;

class User extends ModelBase
 {
  public static $table = "users";
  public static $primary_key = "id";
  public static $columns = [ "name", "email", "password"] ;

  public static $columns_jp = [
    "name" => "ユーザ名",
    "email"=> "メールアドレス", 
    "password" => "パスワード"
  ];

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

  public static create($record) {
    // バリデーションメッセージ
    $errorMessages = [];
    try {
      $db = Db::connect();

      foreach ($record as $c => $v) {
        if (Validator::validatorBlank($v) {
          $errorMessages[] = $columns_jp[$c] . "が未入力です。"
        }
      }

      // メールアドレス
      if (condition) {
      }

      // パスワード
      if (condition) {
      }
      
      $result = self::insert($record);
      return [
        ["data"] => $result,
        ["errorMessages"] => $errorMessages,
      ];
    } catch(\Throwable $th) {

    }
  }

}


