

<?php
namespace App\Controller;
use App\Model\User;
use App\Libs\Server;


class UsersController extends ControllerBase
{
  static function create($params)
  {
    // エラーメッセージ
    $errorMssages = [];

    // csrf対策
    if (is_null($_SESSION["token"]) || is_null($_POST["token"] || $_SESSION["token"] !== $_POST["token"] || Server::validRefeare("signup.php") )) {
      $errorMssages["csrf"] = "無効なリクエストです。";
    } else {
      // xss対策
      $_name = htmlspecialchars($_POST["name"]);
      $_email = htmlspecialchars($_POST["email"]);
      $_password = htmlspecialchars($_POST["password"]);

      try {
        User::insert([
          ":name" => $_name,
          ":email" => $_email,
          ":password" => password_hash($_password, PASSWORD_DEFAULT),
        ]);
        return [
          ["errorMssages"] => $errorMssages,
          ["status"] => 200
        ]
      } catch (\Throwable $th) {
        throw $th;
      }
    }
  }
}

