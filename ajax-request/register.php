<?php

require_once("DBcontroller.php");
require_once("functions.php");

// print_r($db);

$first = validateData($_POST['first']);
$last = validateData($_POST['last']);
$email = validateData($_POST['email']);
$username = validateData($_POST['username']);
$phone_no = validateData($_POST['phone_no']);
$password = validateData($_POST['password']);
// $confirm_password = validateData($_POST['confirm_password']);

$sql_stmt_email = "SELECT email  FROM registered_users WHERE email = '{$email}'";
$sql_stmt_result = $db->query($sql_stmt_email);
$count = mysqli_num_rows($sql_stmt_result);

if($count < 1){
  $sql_stmt_user = "SELECT username  FROM registered_users WHERE username = '{$username}'";
  $sql_stmt_result_username = $db->query($sql_stmt_user);
  $count = mysqli_num_rows($sql_stmt_result_username);
  if ($count < 1) {
    // code...
    $token = openssl_random_pseudo_bytes(16);

    $token = bin2hex($token);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql_stmt = "INSERT INTO registered_users(first, last, user_token, email, username, phone_no, password) VALUES ('$first', '$last', '$token', '$email', '$username', '$phone_no', '$hash')";
    $sql_stmt_query = $db->query($sql_stmt);

    if ($sql_stmt_query) {
        # code...
        echo "true";

    }else{
        echo "An error Occured Please check connection";
    }
  } else {
    // code...
      echo "Username Not Available";
  }

}else{
    echo "Email Already Exist In Our Database";
}
