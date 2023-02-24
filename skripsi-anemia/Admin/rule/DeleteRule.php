<?php
include '../../connect.php';
if(isset($_GET['ruleid'])){
    $id=$_GET['ruleid'];
    $sql="delete from basis_pengetahuan where kode_pengetahuan=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayRule.php');;
    }
}