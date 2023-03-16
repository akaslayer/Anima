<?php
include "connect.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="assets/css/diagnosa.css" rel="stylesheet">
</head>
<?php include 'Navbar.php'; ?>
<body>
<div class="title-section">
  <h2>Diagnosa Penyakit Anemia</h2>
</div>
<div class="container mt-5">
<form name=text_form method="POST" action='HasilDiagnosa.php'>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" style="width:70%">Nama Gejala</th>
      <th scope="col" style="width:20%">Pilih Kondisi</th>
    </tr>
  </thead>
  <tbody class="pilihkondisi">
  <?php
  $sql = mysqli_query($con, "Select * from gejala order by kode_gejala");
  $i = 0;
  while($r = mysqli_fetch_array($sql)){
    $i++;
    echo "<tr><td class=no>$i</td>";
    echo "<td class=gejala>$r[nama_gejala]</td>";
    echo '<td class="opsi"><select name="kondisi[]" id="sl' . $i . '" class="opsikondisi"/><option id="0" value="0" style="color:black">Pilih jika sesuai</option>';
    ?>
      <option id="1" style="color:black" value="<?php echo $r['kode_gejala'] . '_' . 1; ?>">Pasti</option>
      <option id="2" style="color:black" value="<?php echo $r['kode_gejala'] . '_' . 2; ?>">Hampir Pasti</option>
      <option id="3" style="color:black" value="<?php echo $r['kode_gejala'] . '_' . 3; ?>">Kemungkinan Besar</option>
      <option id="4" style="color:black" value="<?php echo $r['kode_gejala'] . '_' . 4; ?>">Mungkin</option>
      <option id="5" style="color:black" value="<?php echo $r['kode_gejala'] . '_' . 5; ?>">Tidak</option>
      <?php
      echo '</select></td>';
      ?>
      <script type="text/javascript">
          $(document).ready(function () {
            var arcolor = new Array('black', 'red', 'blue', 'green', 'purple', 'brown');
            setColor();
            $('.pilihkondisi').on('change', 'select#sl<?php echo $i;?>', function() {
              setColor();
            });
            function setColor()
            {
              var selectedItem = $('select#sl<?php echo $i; ?> :selected');
              var color = arcolor[selectedItem.attr("id")];
              $('select#sl<?php echo $i; ?>.opsikondisi').css('color', color);
            }
          });
        </script>
      <?php
      echo "</tr>"; 
  }
?> 
</tbody>
</table>
</div>
<button type="submit" class="btn-kondisi" name="submit"><i class="fas fa-search"></i></button>
</form>
<?php include 'footer.php'; ?>
</body>
</html>

