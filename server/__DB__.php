<?php
class __database__ {
  private $__info__;
  public $__conn__;
  private $__host__ = "localhost";
  private $__user__ = "root";
  private $__password__ = "";
  private $__db__ = "_blog_";

  public function __construct() {
    // $file = file_get_contents(__DIR__."/../__json__/__ghs__.json");
    //$this->info = json_decode($file, true);
    $this->__conn__ = mysqli_connect($this->__host__, $this->__user__, $this->__password__,
      $this->__db__);
    return true;
  }
  public function __cheak__() {
    if ($this->__conn__) {
      echo "<center><br><br><br><br><h2 style='color:#009801'>MYSQL Connected Successfully !</h2></center>";
    } else {
      echo "<center><br><br><br><h2 style='color:#f00'>MYSQL Connected Failed !</h2></center>";
    }
  }
  public function __SELECT__($sql = null) {
    if ($sql) {
      $query = mysqli_query($this->__conn__, $sql);
      return mysqli_fetch_all($query, true);
    } else {
      echo "Please Insert SQL Query!";
    }
  }
  public function __INSERT__($sql = null) {
    if ($sql) {
      $query = mysqli_query($this->__conn__, $sql);
      if ($query) {
        // code...
        return true;
      }
    } else {
      echo "Please Insert SQL Query!";
    }
  }


  public function __CreateTable__($data) {
    if ($data) {
      $query = mysqli_query($this->__conn__, $data);
      if ($query) {
        // code...
        return "Created!";
      }
    }
  }
  public function __isExist__($sql = null) {
    if ($sql) {
      $query = mysqli_query($this->__conn__, $sql);
      //  return mysqli_fetch_array($query);
      if (mysqli_num_rows($query) == 0) {
        // code...
        return true;
      } else {
        return false;
      }
    } else {
      echo "Please Insert SQL Query!";
    }
  }
}

?>