<?php
    include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `hospitals` where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "Deleted Successfully";
            header('location:dashboard.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
 ?>