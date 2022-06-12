<?php 

class Db
{
  public static function connect()
  {
    try {
      $dsn = "mysql:dbname=test;host=db;";
      $user = "root";
      $password = "password";
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ];
      $dbh = new PDO($dsn, $user, $password, $options);
      $dbh->query('SET NAMES utf8');
      return $dbh;
    } catch (\Throwable $th) {
      throw $th;
      var_dump($th);
    }
  }
}
  $test = "name";
  $db = Db::connect();
  var_dump($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/style/index.css">
</head>
<body>
  <div class="red">
    <h1>Hello <?php echo $test; ?></h1>
    <?php echo $test ; ?>
    <?php var_dump($_SERVER); ?>
  </div>
</body>
</html>