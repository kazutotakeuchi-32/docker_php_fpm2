<?php
require("../vendor/autoload.php");
use App\Model\User;

// tokenが存在するか確認
if (is_null($_SESSION["token"]) || is_null($_POST["token"])) {
  return null;
}else {
  // tokenが一致するか確認
  if($_SESSION["token"] !== $_POST["token"]) {
    return null;
  } 

  $_name = htmlspecialchars($_POST["name"]);
  $_email = htmlspecialchars($_POST["email"]);
  $_password =htmlspecialchars($_POST["password"]);


  // echo($_email);
  // exit;

  User::insert(
    [
      ":name" =>  $_name,
      ":email" => $_email,
      ":password" => password_hash($_password, PASSWORD_DEFAULT)
    ]
    );

}









