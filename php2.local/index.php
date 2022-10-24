<?php


require_once 'Firstclass.php';


$car = new Firstclass();
$bus = new Firstclass();
$trolley = new Firstclass();
$tram = new Firstclass();

//$car->getSpeed();
//$car->setSpeed(123);
//$car->getSpeed();

//$car->changeSpeed();

$bus->setName('Автобус');
$bus->setSpeed(110);
$bus->getName();
$bus->getSpeed();


$trolley->setName('Троллейбус');
$trolley->setSpeed(90);
$trolley->getName();
$trolley->getSpeed();


$tram->setName('Трамвай');
$tram->setSpeed(50);
$tram->getName();
$tram->getSpeed();




$mass=[
    1=>'Яблоко',
    2=>'Клубника'
];

foreach ($mass as $index_massiva=>$nazvanie_fruckta){
    if($index_massiva==1){
        $my_favorit_fruct='Апельсин';
    }
}

?>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "testbd");

$mysqli->real_query("SELECT * FROM `user`");
$result =$mysqli->use_result();
$finaly=$result->fetch_all(MYSQLI_ASSOC);
//print_r($finaly);
//foreach ($finaly as $row){
//    echo "<p>".$row['lastname']."</p>";
//
//}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Привет Мир</h1>
<p>Мой любимый фрукт:<?php echo $my_favorit_fruct?> </p>
<table>
    <thead>
        <th>Фамилия</th>
    </thead>
    <tbody>
    <?php  foreach ($finaly as $row){
            echo "<tr>"."<td>".$row['lastname']."  "."</td>"."</tr>";

            }
            ?>



    </tbody>

</table>

</body>
</html>







