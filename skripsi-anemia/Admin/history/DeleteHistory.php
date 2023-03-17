<?php
include '../../connect.php';
if(isset($_GET['historyid'])){
    $id=$_GET['historyid'];
    $sql="delete from tbl_history where id_history=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:DisplayHistory.php');
    }
}
?>