<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <title>Dashboard - Brand</title>
   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
   <div id="wrapper">

      <?php include "./sideNav.php";
      include("includes/Ticket.php");

      if (isset($_GET['cancel'])) {
         $id = $_GET['cancel'];
         Ticket::clearDetails($id);
      } ?>

      <div class="d-flex flex-column" id="content-wrapper">
         <div id="content">

            <?php include "./header.php" ?>

            <?php
            if (isset($_GET['dashboard'])) {
               include("dashboard.php");
            }

            if (isset($_GET['reload'])) {
               include("reload.php");
            }

            if (isset($_GET['change'])) {
               include("profile.php");
            }
            ?>


         </div>

         <?php include "footer.php" ?>

      </div>
      <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/script.min.js"></script>
</body>

</html>