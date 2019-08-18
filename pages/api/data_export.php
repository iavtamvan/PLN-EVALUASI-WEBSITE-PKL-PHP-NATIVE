<table border="1">
  <tr>
    <th>No</th>
    <th>Komentar Tebuka</th>
    <th>PIC</th>
    <th>Tindak Lanjut</th>
    <th>Sudah</th>
    <th>In Proggress</th>
    <th>Belum</th>
    <th>Link Foto</th>
  </tr>
  <?php
  //koneksi ke database
  include 'config.php';
  if ($_POST){
    $date = $_POST['SUDAH'];
    //query menampilkan data
    $sql = mysqli_query($db,"SELECT * FROM pln_evaluasi where SUDAH='$date'");
    $no = 1;
    while($data = mysqli_fetch_assoc($sql)){
      echo '
		<tr>
		<td>' . $no . '</td>
			<td>'.$data['KOMENTAR_TERBUKA'].'</td>
			<td>'.$data['PIC'].'</td>
			<td>'.$data['TINDAK_LANJUT'].'</td>
			<td>'.$data['SUDAH'].'</td>
			<td>'.$data['IN_PROGRESS'].'</td>
			<td>'.$data['BELUM'].'</td>
			<td>'.$data['LINK_FOTO'].'</td>
		</tr>
		';
      $no++;
    }
    // Fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
    header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
  } else{

  //query menampilkan data
  $sql = mysqli_query($db,"SELECT * FROM pln_evaluasi");
  $no = 1;
  while($data = mysqli_fetch_assoc($sql)) {
    echo '
		<tr>
			<td>' . $no . '</td>
			<td>' . $data['KOMENTAR_TERBUKA'] . '</td>
			<td>' . $data['PIC'] . '</td>
			<td>' . $data['TINDAK_LANJUT'] . '</td>
			<td>' . $data['SUDAH'] . '</td>
			<td>' . $data['IN_PROGRESS'] . '</td>
			<td>' . $data['BELUM'] . '</td>
			<td>' . $data['LINK_FOTO'].'</td>
		</tr>
		';
    $no++;

  }
    // Fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
    header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
  }
  ?>
</table>
