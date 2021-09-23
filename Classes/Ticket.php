<?php 

include ('db.php');

class Ticket{

    private $ticket_id;
    private $from;
    private $to;
    private $time;
    private $date;

    public function setDetails($ticket_id, $from , $to , $time , $date){
        //sets values for properties
        $this->$ticket_id = $ticket_id;
        $this->$from = $from;
        $this->to = $to;
        $this->time = $time;
        $this->$date = $date;
    }

    public function getDetails(){
        //return details array
        $sql = '';
        return mysqli_query($conn,$sql);
    }

    public function clearDetails(){
        $sql = 'DELETE FROM booking WHERE some_column = some_value ';
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
    }


}



?>