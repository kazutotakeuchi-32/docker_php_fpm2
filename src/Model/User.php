<?php 

require "Libs/Db.php";
require "ModelBase.php";


class User extends ModelBase
 {
  public static $table = "users";
  public static $primary_key = "id";
  public static $columns = [ "name", "email", "password"] ;

}

