<?php 
$balance = 0;
$balance_query = 'SELECT `balance` FROM `user` WHERE `nic` = "971834521v"';
$balance_result = mysqli_query($conn,$balance_query);
$balance = $balance_result->fetch_assoc();

?>
<div id="content">
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Dashboard</h3>
        </div>
        <div class="row">
            <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">Upcoming Trips</h6><i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 230px; overflow-y: scroll;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $trip = new Ticket();
                                    $result = $trip->getDetails();

                                    while ($row = $result->fetch_assoc()) {
                                    ?><tr>
                                            <td><?php echo  $row["ffrom"] ?></td>
                                            <td><?php echo  $row["tto"] ?></td>
                                            <td><?php echo  $row["date"] ?></td>
                                            <td><?php echo  $row["time"] ?></td>
                                            <td>
                                                <a href="index.php?cancel=<?php echo  $row["id"]  ?>">
                                                    <div class="text-center small"></div><button class="btn btn-primary btn-sm" type="submit">Cancel</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div><button class="btn btn-primary btn-sm mt-4" type="submit">New Trip</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-primary fw-bold m-0">Balance</h6><i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        
                    </div>
                    <div class="card-body"><span>Rs: <?php echo number_format((float)$balance['balance'], 2, '.', ''); ?></span>
                        <a href="./Reload.html">
                            <div class="text-center small mt-4"></div><button class="btn btn-primary btn-sm" type="submit">Reload</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>