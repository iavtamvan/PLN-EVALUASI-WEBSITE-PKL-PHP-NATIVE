<?php
include "config.php";

//if ($_POST){
//  $idKomentar = $_POST['ID_EVALUASI'];
//  $idUser = $_POST['ID_USER'];
//  $tindakLanjut = $_POST['TINDAK_LANJUT'];
//  $sudah = $_POST['SUDAH'];
//  $inProgress = $_POST['IN_PROGRESS'];
//  $belum = $_POST['BELUM'];
////  $linkFoto = $_POST['LINK_FOTO'];
//
//  $sql = mysqli_query($db, "UPDATE pln_evaluasi SET ID_USER='$idUser', TINDAK_LANJUT='$tindakLanjut', SUDAH='$sudah', IN_PROGRESS='$inProgress', BELUM='$belum', LINK_FOTO='AHH' where ID_EVALUASI='$idKomentar'");
//
//  if ($sql) {
//    header('Location: ../tables/data_user.php');
//
////    $response["error"] = false;
////    $response["error_msg"] = "Berhasil Edit";
////    echo json_encode($response);
//  } else{
//    $response["error"] = false;
//    $response["error_msg"] = "Gagal Edit";
//    echo json_encode($response);
//  }
//
//} else{
//  $response["error"] = true;
//  $response["error_msg"] = "404";
//
//  echo json_encode($response);
//}

if ($_POST){
  $idKomentar = $_POST['ID_EVALUASI'];
  $idUser = $_POST['ID_USER'];
  $tindakLanjut = $_POST['TINDAK_LANJUT'];
  $sudah = $_POST['SUDAH'];
  $inProgress = $_POST['IN_PROGRESS'];
  $belum = $_POST['BELUM'];
//  $linkFoto = $_POST['LINK_FOTO'];

  $ekstensi_diperbolehkan	= array('zip','rar');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
//  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
//    if($ukuran < 100044070){
      move_uploaded_file($file_tmp, 'file/'.$nama);
      $query = mysqli_query($db,"UPDATE pln_evaluasi SET ID_USER='$idUser', TINDAK_LANJUT='$tindakLanjut', SUDAH='$sudah', IN_PROGRESS='$inProgress', BELUM='$belum', LINK_FOTO='$nama' where ID_EVALUASI='$idKomentar'");
      if($query){
        header('Location: ../tables/data_user.php');
        $response["error"] = false;
        $response["error_msg_upload"] = "Berhasil Upload";
        $response["error_msg_nam_file"] = $nama;
        $response["error_msg_tmp"] = $file_tmp;
        echo json_encode($response);
      }else{

        $response["error"] = true;
        $response["error_msg"] = "Gagal Upload";
        echo json_encode($response);
      }
//    }else{
//
//      $response["error"] = true;
//      $response["error_msg"] = "File kegedean";
//      echo json_encode($response);
//    }
//  }else{
//
//    $response["error"] = true;
//    $response["error_msg"] = "Extensi tidak sesuai";
//    echo json_encode($response);
//  }

//  $sql = mysqli_query($db, "UPDATE pln_evaluasi SET ID_USER='$idUser', TINDAK_LANJUT='$tindakLanjut', SUDAH='$sudah', IN_PROGRESS='$inProgress', BELUM='$belum', LINK_FOTO='AHH' where ID_EVALUASI='$idKomentar'");

//  if ($query) {
////    header('Location: ../tables/data_user.php');
//
//    $response["error"] = false;
//    $response["error_msg"] = "Berhasil Edit";
//    echo json_encode($response);
//  } else{
//    $response["error"] = false;
//    $response["error_msg"] = "Gagal Edit";
//    echo json_encode($response);
//  }

} else{
  $response["error"] = true;
  $response["error_msg"] = "404";

  echo json_encode($response);
}

?>
