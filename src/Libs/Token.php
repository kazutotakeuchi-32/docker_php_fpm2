<?php
class Token {
  public static function generate() {
    return bin2hex(openssl_random_pseudo_bytes(16));
  }
}
