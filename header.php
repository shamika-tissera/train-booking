<?php

include("includes/db.php");
?>

<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
   <div class="container-fluid">
      <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
      <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
         <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
      </form>
      <ul class="navbar-nav flex-nowrap ms-auto">
         <li class="nav-item dropdown d-sm-none no-arrow">
            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
               <form class="me-auto navbar-search w-100">
                  <div class="input-group">
                     <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                     <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                  </div>
               </form>
            </div>
         </li>
         <li class="nav-item dropdown no-arrow mx-1">
            <div class="nav-item dropdown no-arrow">
               <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-bell fa-fw"></i></a>
               <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                  <h6 class="dropdown-header">alerts center</h6>
                  
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
               </div>
            </div>
         </li>
         <li class="nav-item dropdown no-arrow mx-1">
            <div class="nav-item dropdown no-arrow">
               <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-envelope fa-fw"></i></a>
               <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                  <h6 class="dropdown-header">alerts center</h6>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
               </div>
            </div>
            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
         </li>
         <div class="d-none d-sm-block topbar-divider"></div>
         <li class="nav-item dropdown no-arrow">
            <div class="nav-item dropdown no-arrow">
               <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                  <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION['first_name']; ?></span>
                  <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.png">
               </a>
               <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                  <a class="dropdown-item" href="index.php?change=<?php echo $_SESSION['user_id']; ?>"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
               </div>
            </div>
         </li>
      </ul>
   </div>
</nav>