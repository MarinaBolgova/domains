<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "testbd");



if($_POST['operation']=='delete'){
//    print_r('Удалена запись с айди '.$_POST['id']);
//    $mysqli->real_query("DELETE FROM `grouplist` WHERE `id`=".$_POST['id'].";");
//    $result =$mysqli->use_result();
    $mysqli->real_query("UPDATE `grouplist`
        SET `status` = 0
        WHERE `id` = ".$_POST['id'].";");
    $result =$mysqli->use_result();

    echo 'Удалена запись с айди '.$_POST['id'];

  exit();

}
