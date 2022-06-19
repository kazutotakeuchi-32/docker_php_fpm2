<?php
class ModelBase {
  public static $table = ""; 
  public static $primary_key = "id";
  public static $columns = [];

  public static function all() {
    try {
      $db = Db::connect();
      $sql = "SELECT * FROM %s";
      $sql = sprintf($sql, static::$table);
      $stmt = $db->prepare($sql);
      $stmt->execute();
      $db = $stmt->fetchAll();
      return $db;
    } catch (\Throwable $th) {
      throw $th;
    }
    return $db;
  }

  public static function find($id) {
    try {
      if($id) {
        throw new Exception("not id", 1);
      }
      $db = Db::connect();
      $sql = "SELECT * FROM %s WHERE %s = :id";
      $sql = sprintf($sql, static::$table, static::$primary_key);
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $output = $stmt->fetch();
      return $output;
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public static function insert($params) {
    try {
      $db = Db::connect();
      $sql = "INSERT INTO %s (%s) VALUES (%s)";
      $sql = sprintf($sql, static::$table, implode(',', static::$columns), implode(',', array_keys($params)));
      $stmt = $db->prepare($sql);
      foreach ($params as $key => $value) {
        $stmt->bindParam($key, $value);
      }
      $stmt->execute();
      return "OK";
    } catch (\Throwable $th) {
      throw $th;
    }
}

}