<?php
$reload_query = "SELECT `transaction_id`, `user_id`, `date`, `time`, `amount` FROM `payment` WHERE 1";
$reload_result = mysqli_query($conn, $reload_query);

?>

<div id="wrapper">

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Reloads</h3>

            </div>
            <div class="card shadow">
                <div class="d-flex flex-row card-header py-3">
                    <p class="text-primary m-0 fw-bold">Payments</p>
                    
                    <button class="btn btn-primary  ms-auto" type="button"> <input type="text" class="me-2" placeholder="Amount"> Reload</button>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive" style="max-height: 200px; overflow-y: scroll;">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $reload_result->fetch_assoc()) {
                                        ?><tr>
                                                <td><?php echo  $row["transaction_id"] ?></td>
                                                <td><?php echo  $row["date"] ?></td>
                                                <td><?php echo  $row["time"] ?></td>
                                                <td><?php echo  number_format((float)$row["amount"], 2, '.', ''); ?></td>

                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top: 30px;">
                
            </div>
        </div>
    </div>
</div>