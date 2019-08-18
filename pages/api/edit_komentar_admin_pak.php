<?php
include "config.php";

if ($_POST){
  $idKomentar = $_POST['ID_EVALUASI'];
  $komentar = $_POST['KOMENTAR_TERBUKA'];

  $sql = mysqli_query($db, "UPDATE pln_evaluasi SET KOMENTAR_TERBUKA='$komentar' where ID_EVALUASI='$idKomentar'");

  if ($sql) {
    header('Location: ../tables/data_pak.php');

//    $response["error"] = false;
//    $response["error_msg"] = "Berhasil Edit";
//    echo json_encode($response);
  } else{
    $response["error"] = false;
    $response["error_msg"] = "Gagal Edit";
    echo json_encode($response);
  }

}

?>
