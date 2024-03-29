<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Login - Train Buddy</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 col-lg-12 col-xl-10">
        <div class="card shadow-lg o-hidden border-0 my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-flex">
                <div class="flex-grow-1 bg-login-image" style="background-image: url('images/loginImage.jpg'); background-size: cover; background-repeat: no-repeat;"></div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                  </div>
                  <form class="user" method="post">
                    <div class="mb-3">
                      <input class="form-control form-control-user" name="email" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" />
                    </div>
                    <div class="mb-3">
                      <input class="form-control form-control-user" name="password" type="password" id="exampleInputPassword" placeholder="Password" name="password" />
                    </div>

                    <button class="btn btn-primary d-block btn-user w-100" name="login" type="submit">
                      Login
                    </button>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>

<?php

if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $get_admin = "select * from user where email='$email' AND password='$password'";

  $run_admin = mysqli_query($conn, $get_admin);

  if ($run_admin) {
    if (mysqli_num_rows($run_admin) == 1) {
      $user = mysqli_fetch_assoc($run_admin);
      $_SESSION['user_id'] = $user['nic'];
      $_SESSION['first_name'] = $user['firstname'];

      header('Location: index.php?dashboard');
    } else {
      echo "<script>alert('Username or Password is Wrong')</script>";
    }
  }
}

?>