<?php
// $a = ["名前" => "佐藤", "メールアドレス" => "sato@example.com"];
// $a_json = json_encode($a, JSON_UNESCAPED_UNICODE);
// var_dump($a);
// var_dump($a_json);

$password = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$isTrue =   password_verify( "rasmuslerdorf", $password);

// var_dump(htmlspecialchars("<script>alert('nnnnn')</script>", ENT_QUOTES));
echo  '<script>alert("nnnnn")</script>';
// echo $_SERVER['HTTP_REFERER'];

// var_dump($_SERVER['HTTP_REFERER']);