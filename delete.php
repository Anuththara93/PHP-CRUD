<?php
    include('dbconnection.php');

    if(isset($_GET['delid'])){
        $id = $_GET['delid'];
        $sql = mysqli_query($con, "delete from crudoperations where ID='$id'");

        if($sql){
            echo "<script>alert('Record deleted successfully')</script>";
            echo "<script type='text/javascript'>document.location = 'view.php';</script>";
        }
        else{
            echo "<script>alert('There is an error')</script>";
        }
    }