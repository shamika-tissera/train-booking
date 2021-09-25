<!DOCTYPE html>
<?php
include("includes/db.php");
$train_id = $_GET['book'];
$query = "SELECT seat_id from trip WHERE train_id = $train_id";
$booked_list_result = mysqli_query($conn, $query);
$seatset = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48];

//master data about the train block
$blockid = 1;
$booked_seatid = 3;

?>
<script>
        amount = 0;
        selectedSeat = [];

        function setEventListner(id) {
            let item = document.getElementById("seat" + id);
            item.addEventListener('click', () => {
                if (item.style.backgroundColor == 'blue') {
                    item.style.backgroundColor = '#212529';
                    for (var i = 0; i < selectedSeat.length; i++) {

                        if (selectedSeat[i] === id) {

                            selectedSeat.splice(i, 1);
                        }

                    }
                    console.log(selectedSeat);
                    amount = amount - 14;
                    document.getElementById('amount').innerHTML = "Total = Rs:" + amount +".00";
                } else {
                    item.style.backgroundColor = 'blue';
                    selectedSeat.push(id);
                    console.log(selectedSeat);
                    amount = amount + 14;
                    document.getElementById('amount').innerHTML = "Total = Rs:" + amount +".00";
                }

            });
        }

        function submit() {
            document.getElementById("hiddenlist").value = selectedSeat.toString();
            document.getElementById("hiddenamount").value = amount;
            document.getElementById('formsubmit').click();
        }
    </script>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Booking</h3>
    <div class="col-11 " style="height: 60vh;">
        <div class="d-flex flex-column col-12">
            <div class="d-flex flex-row col-12">
                <?php

                for ($i = 1; $i <= 12; $i++) {

                ?>

                    <div id='seat<?php echo $i ?>' class="flex-col col-1 m-1 seat seat_hover" style="height: 12.5vh;">
                        <?php echo $i ?>
                    </div>



                <?php //html code end
                }

                ?>
            </div>

            <!-- second row set -->
            <div class="d-flex flex-row col-12">
                <?php

                for ($i = 13; $i <= 24; $i++) {
                    //html code start
                ?>
                    <div id='seat<?php echo $i ?>' class="flex-col  col-1 m-1 seat seat_hover" style="height: 12.5vh;">
                        <?php echo $i ?>
                    </div>




                <?php //html code end
                }

                ?>
            </div>

        </div>
        <div class="d-flex flex-column col-12 mt-4">
            <div class="d-flex flex-row col-12">
                <?php

                for ($i = 25; $i <= 36; $i++) {
                    //html code start
                ?>

                    <div id='seat<?php echo $i ?>' class="flex-col col-1 m-1 seat seat_hover " style="height: 12.5vh;">
                        <?php echo $i ?>
                    </div>



                <?php //html code end
                }

                ?>
            </div>

            <!-- second row set -->
            <div class="d-flex flex-row col-12">
                <?php

                for ($i = 37; $i <= 48; $i++) {
                    //html code start
                ?>
                    <div id='seat<?php echo $i ?>' class="flex-col col-1 m-1 seat seat_hover" style="height: 12.5vh;">
                        <?php echo $i ?>
                    </div>



                <?php //html code end
                }

                while ($id = $booked_list_result->fetch_assoc()) {
                    echo "<script>var element = document.getElementById('seat" . $id['seat_id'] . "');
                                element.style.color = 'red';
                                element.classList.remove('seat_hover');
                                </script>";
                    $seatset = array_diff($seatset, $id);
                }

                foreach ($seatset as $seat) {
                    echo "<script>setEventListner(" . $seat . ")</script>";
                }

                ?>
            </div>

        </div>
    </div>
    <div class=" d-flex flex-row align-items-center mt-2">
        <span id='amount' class="align-middle ms-auto "></span>
        <script>
            document.getElementById('amount').innerHTML = "Total = Rs:" + amount +".00";
        </script>
        <form method="GET" action="payment.php">
            <input id="hiddenlist" name="list" hidden="true" type="text" value="">
            <input id="hiddenamount" name="amount" hidden="true" type="text" value="">
            <input id="hiddenfrom" name="id" hidden="true" type="text" value="<?php echo $train_id ?>">
            <button type="submit" hidden="true" id="formsubmit">Pay</button>
        </form>
        <button type="submit" onclick="submit()" class="btn btn-primary ms-4">Pay</button>
    </div>

</div>

