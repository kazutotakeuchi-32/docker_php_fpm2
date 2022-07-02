<?php 
// csrf対策
require("vendor/autoload.php");
use App\Libs\Token;
session_start();
if (isset($_SESSION["user_id"])) {
  header('Location: /signup.php');
}
$token = Token::generate();
$_SESSION['token'] = $token;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/login.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <h1 class="title">ログイン</h1>
    <form class="form"  action="/actions/login.php"  method="POST">
      <input type="hidden" name="token" value="<?php echo $token; ?>">
      <div class="form-item">
        <p class="form-item-label"><span class="form-item-label-required">必須</span>メールアドレス</p>
        <input type="email" class="form-item-Input" placeholder="メールアドレスを入力してください">
      </div>
      <div class="form-item">
        <p class="form-item-label isMsg"><span class="form-item-label-required">必須</span>パスワード</p>
        <input type="password" class="form-item-Input" placeholder="パスワードを入力してください">
      </div>
      <input type="submit" class="form-btn" value="ログインする">
    </form>
  </div>
</div>
</body>
</html>