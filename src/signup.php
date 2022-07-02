<?php
// require_once 'Libs/Token.php';
require("vendor/autoload.php");
use App\Libs\Token;
// echo Token::generate();
// csrf対策
// session_start();
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
  <link rel="stylesheet" href="/signup.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <h1 class="title">会員登録</h1>
    <form class="form"  action="/create.php"  method="POST">
      <input type="hidden" name="token" value="<?php echo $token; ?>">
      <div class="form-item">
        <p class="form-item-label"><span class="form-item-label-required">必須</span>お名前</p>
        <input type="text" class="form-item-Input" placeholder="例）山田太郎">
      </div>
      <div class="form-item">
        <p class="form-item-label"><span class="form-item-label-required">必須</span>メールアドレス</p>
        <input type="email" class="form-item-Input" placeholder="例）example@gmail.com">
      </div>
      <div class="form-item">
        <p class="form-item-label isMsg"><span class="form-item-label-required">必須</span>パスワード</p>
        <input type="password" class="form-item-Input" placeholder="半角英数6文字以上">
      </div>
      <input type="submit" class="form-btn" value="登録する">
    </form>
  </div>
</div>
</body>
</html>
