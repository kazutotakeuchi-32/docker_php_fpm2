<?php
namespace App\Model;

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
      array_map(function($v){
        return "'".$v ."'";; 
      }, array_values($params));
      $sql = sprintf($sql, static::$table, implode(',', static::$columns),
        implode(',',  
        array_map(function($v){
         return "'".$v ."'";; 
        }, 
        array_values($params)
        ))
      );
      $stmt = $db->prepare($sql);
      $stmt->execute();
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public static function update($params) {
    try {
      $db = Db::connect();
      $sql = "UPDATE %s SET %s WHERE %s = :id";
      
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  private static function descTable() {
    try {
      $db = Db::connect();
      $sql = "DESC %s";
      $sql = sprintf($sql, static::$table);
      $stmt = $db->prepare($sql);
      $stmt->execute();
      $output = $stmt->fetchAll();
      return $output;
    } catch (\Throwable $th) {
      throw $th;
    }
  }

}