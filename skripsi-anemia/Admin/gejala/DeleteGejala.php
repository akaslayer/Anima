<?php
include '../../connect.php';
if(isset($_GET['gejalaid'])){
    $id=$_GET['gejalaid'];
    $sql="delete from gejala where kode_gejala=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayGejala.php');;
    }
}