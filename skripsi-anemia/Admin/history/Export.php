<?php
include '../../connect.php';

// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "history-data_" . date('Y-m-d') . ".xls"; 


$fields = array ('No', 'Tanggal', 'Nama', 'Gender', 'Umur', 'Domisili', 'Hasil' ,'CF');
$excelData = implode("\t", array_values($fields)) . "\n"; 
$query = $con->query("Select * from hasil order by id_hasil asc");
$no = 1;
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $lineData = array($no,$row['tanggal'],$row['nama_user'],$row['jenis_kelamin'],$row['usia'],$row['domisili'],$row['penyakit'],$row['hasil_nilai']);
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