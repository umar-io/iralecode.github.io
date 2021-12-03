<?php


require_once("DBcontroller.php");
require_once("functions.php");



$email =  validateData($_POST['email']);
$passkey = validateData($_POST['password']);


$sql_stmt = $db->query("SELECT user_token , password FROM registered_users WHERE email =  '{$email}'");

$result = $sql_stmt->num_rows;

if($result > 0){
    while($row = $sql_stmt->fetch_assoc()){
        # code...
        $hash_pass = $row['password'];
        $token = $row['user_token'];
    }
    $password_ver = password_verify($passkey, $hash_pass);
    if ($password_ver == 1) {
        # code...
        echo "true";
        $_SESSION['user_token'] = $token;  
        // require_once("../app/index.php")    ;  
    }else{
        echo "Incorrect Password";
    }
}else{
    echo "Username Or Email Does not Exist!!!";
}