<?php
include '../../connect.php';

// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "history-anemia-data_" . date('Y-m-d') . ".xls"; 


$fields = array ('No', 'Tanggal', 'Nama', 'Jenis Kelamin', 'Umur', 'Domisili', 'Hasil' ,'CF');
$excelData = implode("\t", array_values($fields)) . "\n"; 
$query = $con->query("Select * from tbl_history order by id_history asc");
$no = 1;
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $lineData = array($no,$row['tanggal_diagnosa'],$row['nama_user'],$row['jenis_kelamin'],$row['umur'],$row['domisili'],$row['hasil_diagnosa'],$row['nilai_cf']);
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        $no++;
    }
}else{
    $excelData .= 'No records found...'. "\n"; 
}

header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 

echo $excelData; 
 
exit;
?>