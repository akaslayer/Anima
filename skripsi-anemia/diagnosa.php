<?php
include "connect.php";
?>
<h2>Diagnosa Penyakit Anemia</h2>
<form name=text_form method="POST" action='HasilDiagnosa.php'>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width:70%">Nama Gejala</th>
      <th scope="col" style="width:20%">Pilih Kondisi</th>
    </tr>
    </tr>
  </thead>
  <?php
  $sql = mysqli_query($con, "Select * from gejala order by kode_gejala");
  $i = 0;
  while($r = mysqli_fetch_array($sql)){
    $i++;
    echo "<tr><td class=opsi>$i</td>";
    echo "<td class=gejala>$r[nama_gejala]</td>";
    // echo '<td class="opsi"><select name="kondisi[] class="opsikondisi" id="sl' . $i . '" /><option data-id="0" value="0">Pilih jika sesuai</option>';
    echo '<td class="opsi"><select name="kondisi[]" id="sl' . $i . '" class="opsikondisi"/><option data-id="0" value="0">Pilih jika sesuai</option>';
    // $s = "select * from kondisi order by id";
    // $q = mysqli_query($con, $s) or die($s);
    // echo "<option data-id=1 value=$r3[kode_gejala] . '_' . 1;>Pasti</option>";
    // echo "<option data-id=2 value=$r3[kode_gejala] . '_' . 2;>Hampir Pasti</option>";
    // echo "<option data-id=3 value=$r3[kode_gejala] . '_' . 3;>Kemungkinan Besar</option>";
    // echo "<option data-id=4 value=$r3[kode_gejala] . '_' . 4;>Mungkin</option>";
    // echo "<option data-id=5 value=$r3[kode_gejala] . '_' . 5;>Tidak</option></select></td></tr>";
    ?>
      <option data-id="1" value="<?php echo $r['kode_gejala'] . '_' . 1; ?>">Pasti</option>
      <option data-id="2" value="<?php echo $r['kode_gejala'] . '_' . 2; ?>">Hampir Pasti</option>
      <option data-id="3" value="<?php echo $r['kode_gejala'] . '_' . 3; ?>">Kemungkinan Besar</option>
      <option data-id="4" value="<?php echo $r['kode_gejala'] . '_' . 4; ?>">Mungkin</option>
      <option data-id="5" value="<?php echo $r['kode_gejala'] . '_' . 5; ?>">Tidak</option>
      <?php
      echo '</select></td>';
      ?>
        
      <?php
      echo "</tr>";
    
  }
  ?>
  
		  <input class='float' type=submit data-toggle='tooltip' data-placement='top' title='Klik disini untuk melihat hasil diagnosa' name=submit>
  <tbody>
</tbody>
</form>

