<?php

namespace Donsframe;

//========================================================================
class Data {
  private static $_results = null;
  private static $_name    = null;

  public static function SetName($x){ self::$_name = $x; }

//========================================================================
  public static function Get($query, $field, $row){
    $return_value = '';
    if (isset(self::$_results[$query][$row][$field])) $return_value = self::$_results[$query][$row][$field];
    return $return_value;
  }

//========================================================================
  public static function GetRowCount($query){
    $return_value = 0;
    if (isset(self::$_results[$query])) $return_value = count(self::$_results[$query]);
    return $return_value;
  }

//========================================================================
  public static function Set($x){
    self::$_results[self::$_name] = $x;
    Debug::Set('Stored named query: ' . self::$_name);
    self::$_name = '';
  }

//========================================================================
  public static function GetArray($query){
    return self::$_results[$query];
  }

//========================================================================
  public static function GetData($query, $field, $lookin, $lookfor){
    // TODO: php 5.5 and greater.......
    $return_value = '';
    $key = array_search($lookfor, array_column(self::$_results[$query], $lookin));
    if (is_numeric($key)) $return_value = self::$_results[$query][$key][$field];
    return $return_value;
  }

  /*
//========================================================================
  public static function GetData($query, $field, $lookin, $lookfor){
    // TODO: php 5.5 and lesser...
    $return_value = '';
    if (isset(self::$_results[$query][0][$lookin])) {
      for ($n=0; $n<sizeof(self::$_results[$query]); $n++) {
        if (self::$_results[$query][$n][$lookin] == $lookfor) {
          $return_value = self::$_results[$query][$n][$field];
          break;
        }
      }
    }
    return $return_value;
  }
*/

}
