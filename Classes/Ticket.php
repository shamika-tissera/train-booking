<?php

class Ticket
{

    private $ticket_id;
    private $from;
    private $to;
    private $time;
    private $date;

    public function setDetails($ticket_id, $from, $to, $time, $date)
    {
        //sets values for properties
        $this->$ticket_id = $ticket_id;
        $this->$from = $from;
        $this->to = $to;
        $this->time = $time;
        $this->$date = $date;
    }

    public function getDetails()
    {
        include('db.php');
        //return details array
        $sql = 'SELECT * FROM `trip`';
        return mysqli_query($conn, $sql);
    }

    public static function clearDetails($id)
    {
        include('db.php'); 
        $sql = 'DELETE FROM `trip` WHERE id ='. $id;
        $run_delete = mysqli_query($conn, $sql);   
        if ($run_delete) {
            echo "<script>alert('Trip Has been canceled!')</script>";
           // echo "<script>window.open('index.php','_self')</script>";
        }
    }
}
