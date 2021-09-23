<?php
include("includes/db.php");

$errorBox = array();
$nicErr = $fristnameErr = $lastnameErr = $telephoneErr = $emailErr = $passwordErr = $cpasswordErr = "";

if (isset($_POST['adduser'])) {

  $nic = $_POST['nic'];
  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $telephone  = $_POST['telephone'];
  $email  = $_POST['email'];
  $password  = $_POST['password'];
  $cpassword  = $_POST['cpassword'];


  if (empty(trim($_POST['nic']))) {
    $nicErr = 'NIC is required';
    $errorBox[] = 1;
  }

  if (empty(trim($_POST['firstname']))) {
    $fristnameErr = 'First Name is required';
    $errorBox[] = 1;
  }

  if (empty(trim($_POST['lastname']))) {
    $lastnameErr = 'Last Name is required';
    $errorBox[] = 1;
  }

  if (empty(trim($_POST['telephone']))) {
    $telephoneErr = 'Telephone no is required';
    $errorBox[] = 1;
  } else {
    if (!is_numeric($telephone)) {
      $telephoneErr = "Only numbers are allowed.";
      $errorBox[] = 1;
    }
  }

  if (empty(trim($_POST['email']))) {
    $emailErr = 'Email is required';
    $errorBox[] = 1;
  } else {
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/", $_POST['email'])) {
      $emailErr = "Email is not valid";
      $errorBox[] = 1;
    }
  }

  if (empty(trim($_POST['password']))) {
    $passwordErr = 'Password is required';
    $errorBox[] = 1;
  }

  if (empty(trim($_POST['cpassword']))) {
    $cpasswordErr = 'Confirm Password is required';
    $errorBox[] = 1;
  }


  if (empty($errorBox)) {
    if ($password == $cpassword) {
      $insertuser = "insert into user (nic,firstname,lastname,telephone,email,password)"
        . " values ('$nic','$firstname','$lastname','$telephone','$email','$password' )";

      $runuser = mysqli_query($conn, $insertuser);

      if ($runuser) {
        echo "<script> alert('User added successfully ')</script>";
        //echo "<script> window.open('staff.php ','_self')</script>";
      }
    } else {
      echo "<script> alert('Password did not match ')</script>";
    }
  } else {
    echo "<script> alert('User added failed ')</script>";
  }
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Register - Brand</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-5 d-none d-lg-flex">
            <div class="flex-grow-1 bg-register-image" style="background-image: url('assets/img/dogs/image2.jpeg')"></div>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h4 class="text-dark mb-4">Create an Account!</h4>
              </div>
              <form class="user" method="post">
                <div class="row mb-3">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="firstname" />
                    <div style="color: red; font-size: 15px"><?php echo $fristnameErr ?></div>
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="lastname" />
                    <div style="color: red; font-size: 15px"><?php echo $lastnameErr ?></div>
                  </div>
                </div>
                <div class="mb-3">
                  <input class="form-control form-control-user" type="text" id="telephone" aria-describedby="teleHelp" placeholder="Telephone Number" name="telephone" />
                  <div style="color: red; font-size: 15px"><?php echo $telephoneErr ?></div>
                </div>
                <div class="mb-3">
                  <input class="form-control form-control-user" type="text" id="nic" aria-describedby="nicHelp" placeholder="NIC" name="nic" />
                  <div style="color: red; font-size: 15px"><?php echo $nicErr ?></div>
                </div>
                <div class="mb-3">
                  <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" />
                  <div style="color: red; font-size: 15px"><?php echo $emailErr ?></div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password" />
                    <div style="color: red; font-size: 15px"><?php echo $passwordErr ?></div>
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Confirm Password" name="cpassword" />
                    <div style="color: red; font-size: 15px"><?php echo $cpasswordErr ?></div>
                  </div>
                </div>
                <button class="btn btn-primary d-block btn-user w-100" name="adduser" type="submit">
                  Register Account
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>