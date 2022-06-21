<?php
namespace App\Libs;

class Validator {
  public static validatorEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

  public static validatorPassword($password) {
    if (preg_match("/^[a-zA-Z0-9]{6,}$/", $password)) {
      return true;
    } else {
      return false;
    }
  }

  public static validatorName($name) {
    if (preg_match("/^[a-zA-Z]{1,}$/", $name)) {
      return true;
    } else {
      return false;
    }
  }

 
}