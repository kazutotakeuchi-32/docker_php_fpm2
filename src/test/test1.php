<?php
if (isset($_COOKIE['token'])) {
  echo $_COOKIE['token'];
}else{
  $token = bin2hex(openssl_random_pseudo_bytes(16));
  setcookie('token', $token, time() + 60);
}
