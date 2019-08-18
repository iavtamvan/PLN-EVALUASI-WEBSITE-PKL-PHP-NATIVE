<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 7/7/2019
 * Time: 8:28 PM
 */

include "../api/config.php";
session_start();

if ($_GET){

    $username = $_GET['USERNAME'];
    $password = $_GET['PASSWORD'];

    $sql = mysqli_query($db, "Select * from pln_user where USERNAME='$username' and PASSWORD='$password'");
    $user = mysqli_fetch_assoc($sql);
    $num = mysqli_num_rows($sql);
    date_default_timezone_set('Asia/Jakarta');
    $currentDateTime = date("Y-m-d h:i:s");
  //  echo "The current server timezone is: " . $timezone;

    $idUser = "".$user['ID_USER'];
    $username = "".$user['USERNAME'];
    $rule = "".$user['RULE'];
//    $regID = "".$user['REG_ID'];

  $_SESSION['username'] = $username;
  $_SESSION['id_user'] = $idUser;
  $_SESSION['rule'] = $rule;



    if ($num > 0) {
        $response["error"] = false;
        $response["error_msg"] = "Berhasil Login";
        $response["error_msg_time"] = $currentDateTime;
//        $response["id"] = $id_account;
//        $response["username"] = $username;
//        $response["rule"] = $rule;
//        $response["regID"] = $regID;
        echo json_encode($response);

        if ($rule == "admin"){
          header('Location: ../../index_admin.php');
        } elseif ($rule == "user"){
          header('Location: ../../index_user.php');
        } else {
          header('Location: ../examples/500.html');
        }


    } else{
        $response["error"] = false;
        $response["error_msg"] = "Gagal Mengirim";
        echo json_encode($response);
    }

} else {
    $response["error"] = true;
    $response["error_msg"] = "404";

    echo json_encode($response);
}
?>
