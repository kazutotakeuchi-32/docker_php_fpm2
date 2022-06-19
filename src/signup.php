<?php
require_once 'Libs/Token.php';
// csrf対策
session_start();
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
  <link rel="stylesheet" href="/style/signup.css">
</head>
<body>
  <div class="wrapper">
    <form action="create.php" class="form"  method="POST">
      <input type="hidden" name="token" value="<?php echo $token; ?>">
      <div class="form__group">
        <label for="name">名前</label>
        <input type="text" name="name" placeholder="name">
      </div>
      <div class="form__group">
        <label for="email">メールアドレス</label>
        <input type="email" name="email" placeholder="email">
      </div>
      <div class="form__group">
        <label for="password">パスワード</label>
        <input type="password" name="password" placeholder="password">
      </div>
      <div class="action">
        <input type="submit" value="submit">
      </div>
    </form>
  </div>
</body>
</html>
