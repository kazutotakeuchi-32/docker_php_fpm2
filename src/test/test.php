<?php
// $a = ["名前" => "佐藤", "メールアドレス" => "sato@example.com"];
// $a_json = json_encode($a, JSON_UNESCAPED_UNICODE);
// var_dump($a);
// var_dump($a_json);

// $password = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
// $isTrue =   password_verify( "rasmuslerdorf", $password);

// var_dump(htmlspecialchars("<script>alert('nnnnn')</script>", ENT_QUOTES));
// echo  '<script>alert("nnnnn")</script>';
// echo $_SERVER['HTTP_REFERER'];

// var_dump($_SERVER['HTTP_REFERER']);




 $array = [
    "name" => '$_name',
    "email" =>' $_email',
    "password" => 'password_hash($_password, PASSWORD_DEFAULT)'
  ] ;


// var_dump(array_keys($array));

  $array_str = array_map(
  function($key) {
    // var_dump( $key . ":");
    return  ":".$key;
  }, array_keys($array));



var_dump($array_str);


//  $func = function(int $value): int {
//     return $value * 2;
// };

// print_r(array_map($func, range(1, 5)));

