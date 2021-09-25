<?php
include("includes/db.php");

if (isset($_GET['change'])) {

   $edit_id = $_GET['change'];

   $get_pro = "select * from user where nic='$edit_id'";

   $run_pro = mysqli_query($conn, $get_pro);


   $row_pro = mysqli_fetch_array($run_pro);

   $nic = $row_pro['nic'];
   $firstname = $row_pro['firstname'];
   $lastname = $row_pro['lastname'];
   $telephone = $row_pro['telephone'];
   $email = $row_pro['email'];
}

?>


<div id="wrapper">



   <div class="d-flex flex-column" id="content-wrapper">
      <div id="content">


         <div class="container-fluid">
            <h3 class="text-dark mb-4">Profile</h3>
            <div class="row mb-3">
               <div class="col-lg-4">
                  <div class="card mb-3">
                     <div class="card-body text-center shadow">
                        <img class="rounded-circle mb-3 mt-4" src="images/user icon.png" width="160" height="160">
                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                     </div>
                  </div>
                  
               </div>
               <div class="col-lg-8">
                  <div class="row mb-3 d-none">
                     <div class="col">
                        <div class="card textwhite bg-primary text-white shadow">
                           <div class="card-body">
                              <div class="row mb-2">
                                 <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                              </div>
                              <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card textwhite bg-success text-white shadow">
                           <div class="card-body">
                              <div class="row mb-2">
                                 <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                 </div>
                                 <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                              </div>
                              <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="card shadow mb-3">
                           <div class="card-header py-3">
                              <p class="text-primary m-0 fw-bold">User Settings</p>
                           </div>
                           <div class="card-body">
                              <form method="post" action="updateuser.php">
                                 <div class="row">
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="nic"><strong>NIC</strong></label><input class="form-control" type="text" id="nic" name="nic" value="<?php echo $nic ?>"></div>
                                    </div>
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" name="email" value="<?php echo $email ?>"></div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" name="firstname" value="<?php echo $firstname ?>"></div>
                                    </div>
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" name="lastname" value="<?php echo $lastname ?>"></div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="telephone"><strong>Telephone Number</strong></label><input class="form-control" type="text" id="telephone" name="telephone" value="<?php echo $telephone ?>"></div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="password"><strong>New Password</strong></label><input class="form-control" type="text" id="password" name="password"></div>
                                    </div>
                                    <div class="col">
                                       <div class="mb-3"><label class="form-label" for="cpassword"><strong>Confrim Paaword</strong></label><input class="form-control" type="text" id="cpassword" name="cpassword"></div>
                                    </div>
                                 </div>
                                 <div class="mb-3"><button class="btn btn-primary btn-sm" name="update" type="submit">Update Settings</button></div>
                              </form>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </div>



   </div>
   <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>