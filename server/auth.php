<?php
session_start();
require '__DB__.php';
$db = new __database__();


function __Cookie__($user_id) {
  $enc_id = "__ghs__".$user_id;
  setcookie("user_id", $enc_id, time()+30*24*60*60, "/");
}


function __CheakLogin__($cookie) {
 return $sql = "SELECT * FROM users WHERE user_id='$cookie'";
 exit ();
  $query = $db->__SELECT__($sql);
  if ($query) {
    __Cookie__($query[0]['user_id']);
    $_SESSION['user_info'] = $query;
    return true;
  }
}

if ($_POST['user_name'] && $_POST['user_password']) {
  // code...
  $message = "";
  $statuss = "";
  $usename = trim($_POST['user_name']);
  $password = trim($_POST['user_password']);
  $enc_pass = sha1($password);
  if ($usename == "") {
    // code...
    $message = "Please Insert User Name";
  } else if (empty($password)) {
    // code...
    $message = "Please Insert User Password";
  } else {
    $sql = "SELECT * FROM users WHERE user_name = '$usename' AND user_password = '$enc_pass'";
    $query = $db->__SELECT__($sql);
    if ($query) {
      // code...
      __Cookie__($query[0]['user_id']);
      $_SESSION['user_info'] = $query;
      $statuss = true;
      $message = "Login Successfully!";
    } else {
      $message = "Invalid Login";
    }
  }
  echo json_encode(array(
    "statuss" => $statuss,
    "message" => $message,
  ));
}

/*   FOR REGISTRATION CODDING...   */


if ($_POST['username'] && $_POST['userpassword']) {
  // code...
  $message = "";
  $statuss = "";
  $usename = trim($_POST['username']);
  $useremail = trim($_POST['useremail']);
  $pass = trim($_POST['userpassword']);
  $password = sha1($pass);

  // VALIDATION...
  if (!empty($usename) &&!empty($useremail) &&!empty($password)) {
    // code...
    $sql = "SELECT * FROM users WHERE user_name = '$usename' AND user_email = '$useremail'";
    if ($db->__isExist__($sql)) {
      // code...
      $insert = "INSERT INTO users(user_name,user_email,user_password) VALUES($usename','$useremail','$password')";
      $message = $db->__INSERT__($insert);
    } else {
      $message = "User Already Exist !";
    }
  } else {
    $message = "Form Is Required !";
  }
  echo json_encode(array(
    "message" => $message,
  ));
}




?>