<?php
include '../../connect.php';
if(isset($_GET['penyakitid'])){
    $id=$_GET['penyakitid'];
    $sql="delete from tbl_penyakit where id_penyakit=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayPenyakit.php');;
    }
}