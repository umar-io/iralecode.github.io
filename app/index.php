<?php

session_start();

require_once "../ajax-request/DBcontroller.php";

// Session Storage
if (!$_SESSION['user_token']) {
    header("Location: ../login.php");
}

$user_token = $_SESSION['user_token'];

$sql_stmt = "SELECT * FROM registered_users WHERE user_token = '$user_token'";
$sql_stmt_return = $db->query($sql_stmt);

if (!$sql_stmt_return) {
    # code...
    echo "
    <script>
    swal({
       type : 'error',
       text : 'An error occured while processing your information , Please Try Again Later'
    });
    </script>
    ";
} else {
    while ($row = $sql_stmt_return->fetch_assoc()) {
        $firstname = $row['first'];
        $lastname = $row['last'];
        $email = $row['email'];
        $username = $row['username'];
        $status = $row['status'];
        $phone_no  = $row['phone_no'];
    }
}

// End of session storage

// time
date_default_timezone_set('Africa/Lagos');

$date = date('d-m-y h:i:s');

// end of time function

// Geolocation Function




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $_SERVER['SERVER_NAME'];?> | Homepage </title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link rel="stylesheet" href="../assets/libs/sweetalert2/sweetalert2.min.css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
    <style>
        body{
        background: #fff !important;
        font-family: 'Courier New', Courier, monospace !important;
        font-weight: bolder;
        }

        p{
            font-weight: bold;
            font-size: 15px;
        }

        p>a{
            font-weight: bold;
            font-size: 20px;
        }
        .bg-dark{
            width: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin : 0 auto;
            padding: 8px;
            border-radius: 15px;
            height: 65px;

        }
        .bg-dark>p{
           color: gray;
        }
    </style>
</head>
<body>
<br><br><br><br>
  <div class="row justify-content-center mt-4">

  <div class="col-md-6 ">
            <div class="card">
              <div class="card-header">




  <div class="text-center">

                      <div class="avatar avatar-online">
                        <img src="avater.png" width="70px" alt="..." class="avatar-img rounded-circle">
                      </div>

                       <br>



                       <h4> <b> Profile </b> </h4>
  </div>





                  </div>


                    <div class="table-responsive">
                      <table id="add-row" class="display table table-striped table-hover" >

                        <tbody>

   <tr>

                   <td> <b> Firstname </b></td>

                          <td><?php echo $firstname; ?></td>

                          </tr>


                          <tr>

                   <td> <b> Lastname </b></td>

                          <td><?php echo $lastname; ?></td>

                          </tr>


                          <tr>

                   <td> <b> Username </b></td>

                          <td><?php echo $username; ?></td>

                          </tr>

                          <tr>

                   <td> <b> Phone Number </b></td>

                          <td><?php echo $phone_no; ?></td>

                          </tr>

                                  <tr>

                   <td> <b> Email </b></td>

                          <td><?php echo $email; ?></td>

                          </tr>


                          <tr>

                   <td> <b> Referral Link </b></td>

                          <td><?php echo "{$_SERVER['SERVER_NAME']}/register.php?ref={$username}"; ?> </td>

                          </tr>



                          <tr>

                   <td> <b> Status </b></td>

                          <td> <?php echo $status; ?> </td>

                          </tr>


            </div>
               </tbody>
                      </table>
                  </div>
<div class="border-top">
                                  <div class="card-body">

  <a href="#"> <button class="btn btn-info"  name="proceed"> Change password </button></a>

  <a href="#"> <button class="btn btn-info float-right"  name="proceed"> Edit profile </button></a>

                                  </div>
                              </div>



<a href="logout.php"> <button class="btn btn-danger "  name="proceed">logout</button></a>
  </div>


  </div>


  </div>


<script src="assets/js/vendor.min.js"></script>
<!-- Plugin js-->
<script src="../assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="../assets/js/app.min.js"></script>

</body>
</html>
