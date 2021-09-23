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

         <?php include "./sideNav.php" ?>

         <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
               
               <?php include "./header.php" ?>

               <div class="container-fluid">
                  <div class="d-sm-flex justify-content-between align-items-center mb-4">
                     <h3 class="text-dark mb-0">Dashboard</h3>
                  </div>
                  <div class="row">
                     <div class="col-lg-7 col-xl-8">
                        <div class="card shadow mb-4">
                           <div class="card-header d-flex justify-content-between align-items-center">
                              <h6 class="text-primary fw-bold m-0">Upcoming Trips</h6>
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                              <div class="dropdown no-arrow">
                                 <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                 <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                    <p class="text-center dropdown-header">dropdown header:</p>
                                    <a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body">
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
                              <button class="btn btn-primary btn-sm" type="submit">New Trip</button>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                           <div class="card-header d-flex justify-content-between align-items-center">
                              <h6 class="text-primary fw-bold m-0">Balance</h6>
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                              <div class="dropdown no-arrow">
                                 <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                 <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                    <p class="text-center dropdown-header">dropdown header:</p>
                                    <a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body">
                              <span>$215,000</span>
                              <div class="text-center small mt-4"></div>
                              <button class="btn btn-primary btn-sm" type="submit">Reload</button>
                           </div>
                        </div>
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