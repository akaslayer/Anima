<?php
include '../../connect.php';
if(isset($_GET['historyid'])){
    $id=$_GET['historyid'];
    $sql="delete from hasil where id_hasil=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayHistory.php');
    }
}
?>