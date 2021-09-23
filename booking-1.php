<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Table - Brand</title>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
   </head>
   <body id="page-top">
      <div id="wrapper">
         
        <?php include "./sideNav.php" ?>

         <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

            <?php include "./header.php" ?>

               <div class="container-fluid">
                  <h3 class="text-dark mb-4">Booking</h3>
               </div>
               <div class="card shadow">
                  <div class="card-header py-3">
                     <p class="text-primary m-0 fw-bold">Booking</p>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <label class="form-label">From:</label>
                           <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 250px;">Dropdown </button>
                              <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                           </div>
                        </div>
                        <div class="col">
                           <label class="form-label">To:</label>
                           <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 250px;">Dropdown </button>
                              <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-body" style="margin-top: 10px;">
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Column 1</th>
                                 <th>Column 2</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Cell 1</td>
                                 <td>Cell 2</td>
                              </tr>
                              <tr>
                                 <td>Cell 3</td>
                                 <td>Cell 4</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            
            <?php include "footer.php" ?>
            
         </div>
         <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script><script src="assets/js/script.min.js"></script>
   </body>
</html>