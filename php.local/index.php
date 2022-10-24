<?php

$link = mysqli_connect("localhost", "root", "");


if (!empty($link)) {

    $sql = "SELECT * FROM `testbd`.`user`";

    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print(mysqli_error($link));
    }
}

while ($row = mysqli_fetch_array($result)) {
    print_r($row);
}
