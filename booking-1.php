<?php

include("includes/db.php");
// dropdown list item fetch from database
$query = "select sid, stationname from station";
$resultset = mysqli_query($conn, $query);

$station_list = "";
while ($result = mysqli_fetch_assoc($resultset)) {
   $station_list .= "<option value = \"{$result['stationname']}\" >{$result['stationname']}</option>";
}
?>
<div class="card shadow">
   <div class="card-header py-3">
      <p class="text-primary m-0 fw-bold">Booking</p>
   </div>
   <div class="card-body">
      <div class="row">
         <form method="GET">
            <div class="col">
               <label class="form-label">From:</label>
               <div class="dropdown">

                  <select class="form-select " name="start" aria-label="Default select example" id="list1" onchange="getValueOne();">
                     <?php echo $station_list ?>
                  </select>
                  <label id="output1"></label>
               </div>
            </div>
            <div class="col">
               <label class="form-label">To:</label>
               <div class="dropdown">
                  <select class="form-select " name="end" aria-label="Default select example" id="list2" onchange="getValueTwo();">
                     <?php echo $station_list ?>
                  </select>
                  <label id="output2"></label>
               </div>
            </div>
            <div class="col">
               <button class="btn btn-success" name="search" type="submit" id="searchBtn">Search</button>
         </form>
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
                  <th>Train ID</th>
                  <th>Start</th>
                  <th>End</th>
                  <th>Booking</th>
               </tr>
            </thead>
            <tbody>

               <?php
               while ($train = $trainlist->fetch_assoc()) {
               ?> <tr>
                     <td> <?php echo $train['Train_Name'] ?> </td>
                     <td> <?php echo $train['ffrom'] ?> </td>
                     <td> <?php echo $train['Departure'] ?> </td>
                     <td>
                        <a href="index.php?book=<?php echo  $train["train_id"] ?>">
                           <div class="text-center small"></div><button class="btn btn-primary btn-sm" type="submit">Book</button>
                        </a>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>

            <?php
            $gettrain = "select * from train";

            $runtrain = mysqli_query($conn, $gettrain);

            while ($rowtrain = mysqli_fetch_array($runtrain)) {

               $trainid = $rowtrain['trainid'];
               $start = $rowtrain['start'];
               $end = $rowtrain['end'];
            }
            echo "<script>";
            echo "var records = [";
            while ($rowtrain = mysqli_fetch_array($runtrain)) {
               echo "{'trainid': '$trainid', 'start': '$start', 'end': '$end'},";
            }
            echo "];";
            echo "</script>";
            ?>
            <tbody id="tableBody">

            </tbody>
         </table>
      </div>
   </div>
</div>

<script>
   function getValueOne() {
      var selectedValueOne = document.getElementById("list1").value;
      document.getElementById("output1").innerHTML = selectedValueOne;
      return selectedValueOne;
   }

   function getValueTwo() {
      var selectedValueTwo = document.getElementById("list2").value;
      document.getElementById("output2").innerHTML = selectedValueTwo;
      return selectedValueTwo;
   }

   $('#searchBtn').on('click', function() {

      var selectedValueOne = getValueOne();
      var selectedValueTwo = getValueTwo();

      var value = $(this).val();
      console.log('value - 1: ' + selectedValueOne + "   " + "value - 2: " + selectedValueTwo);
      var filteredInfo = filterData(selectedValueOne, selectedValueTwo);
      buildTable(filteredInfo);
   })

   function filterData(value1, value2) {
      var filteredInfo = [];
      for (let i = 0; i < records.length; i++) {
         value = value.toLowerCase();
         var trainid = records[i].trainid;
         var start = records[i].start.toLowerCase();
         var end = records[i].end.toLowerCase();

         if (start === value1 && end === value2) {
            filteredInfo.push(records[i]);
         }

      }
      return filteredInfo;
   }

   function buildTable(records) {
      let tableBody = document.getElementById("tableBody");
      tableBody.innerHTML = '';
      for (let i = 0; i < records.length; i++) {
         var row = `<tr>
                        <td> ${records[i].trainid} </td>
                        <td> ${records[i].start} </td>
                        <td> ${records[i].end} </td>
                        
                        </tr>`;
         tableBody.innerHTML += row;
      }
   }
</script>