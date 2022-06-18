<?php 

use \Model\ModelBase;

class User extends ModelBase
 {
  public $name;
  public $email;
  public $password;
  public $created_at;
  public $updated_at;
  public $id;
  public function __construct($name, $email, $password, $created_at, $updated_at, $id) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->id = $id;
  }
}

