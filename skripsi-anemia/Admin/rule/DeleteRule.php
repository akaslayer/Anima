<?php
include '../../connect.php';
if(isset($_GET['ruleid'])){
    $id=$_GET['ruleid'];
    $sql="delete from tbl_rule where id_rule=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayRule.php');;
    }
}