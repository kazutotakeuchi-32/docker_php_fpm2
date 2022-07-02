<?php 
// tokenが存在するか確認
require("../vendor/autoload.php");
use App\Model\User;


if (is_null($_SESSION["token"]) || is_null($_POST["token"])) {
  return null;
}else {
  // tokenが一致するか確認
  if($_SESSION["token"] !== $_POST["token"]) {
    return null;
    session_destroy();
  } 

  $_email = htmlspecialchars($_POST["email"]);
  $_password =htmlspecialchars($_POST["password"]);

  if (is_null($_email) || is_null($_password)) {
    return null;
    session_destroy();
  }

  $user = User::findByEmail($_email);
  if (is_null($user)) {
    return null;
  }
  
  // パスワードが一致するか確認
  if (password_verify($_password, $user["password"])) {
    $_SESSION["user_id"] = $user["id"];
    echo "A";
    return true;
  } else {
    return false;
  }

}



