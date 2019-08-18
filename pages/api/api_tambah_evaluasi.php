<?php
include 'config.php';


if ($_POST){

  $idUser = $_POST['ID_USER'];
  $komentarTerbuka = $_POST['KOMENTAR_TERBUKA'];
  $pic = $_POST['PIC'];
  $tindakLanjut = $_POST['TINDAK_LANJUT'];
  $sudah = $_POST['SUDAH'];
  $inProgress = $_POST['IN_PROGRESS'];
  $belum = $_POST['BELUM'];
  $linkFoto = $_POST['LINK_FOTO'];
  $jenisEvaluasi = $_POST['JENIS_EVALUASI'];

  $sql = mysqli_query($db, "INSERT INTO `pln_evaluasi` (`ID_USER`, `KOMENTAR_TERBUKA`, `PIC`, `TINDAK_LANJUT`, `SUDAH`, `IN_PROGRESS`, `BELUM`, `LINK_FOTO`, `JENIS_EVALUASI`) 
VALUES ('$idUser', '$komentarTerbuka', '$pic', '$tindakLanjut', '$sudah', '$inProgress', '$belum', '$linkFoto', '$jenisEvaluasi');");

  if ($sql) {
    $response["error"] = false;
    $response["error_msg"] = "Berhasil";
    echo json_encode($response);
  } else{
    $response["error"] = false;
    $response["error_msg"] = "Gagal Menambah";
    echo json_encode($response);
  }

} else{
  $response["error"] = false;
  $response["error_msg"] = "404";
  echo json_encode($response);
}


?>
