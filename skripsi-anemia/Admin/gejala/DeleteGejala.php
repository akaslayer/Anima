<?php
include '../../connect.php';
if(isset($_GET['gejalaid'])){
    $id=$_GET['gejalaid'];
    $sql="delete from tbl_gejala where id_gejala=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayGejala.php');;
    }
}