<?php
session_start();
require "../vendor/autoload.php";
use App\Model\User;
use App\Libs\Server;

// リファラーチェック

// tokenが存在するか確認(csrf対策１)
if (is_null($_SESSION["token"]) || is_null($_POST["token"])) {
  return null;
} else {
  // tokenが一致するか確認
  if ($_SESSION["token"] !== $_POST["token"]) {
    return null;
  }

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
  } catch (\Throwable $th) {
    throw $th;
  }
}
