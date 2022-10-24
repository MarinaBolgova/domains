<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "testbd");
$mysqli->real_query("SELECT * FROM `grouplist` WHERE `Status`=1");
$result =$mysqli->use_result();
$finaly=$result->fetch_all(MYSQLI_ASSOC);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm12">

            <table class="table">
                <thead class="thead-dark"> <!--Заголовки TH-->
                <tr data-row-id="'.$finaly_row['id'].'">
                    <th style="text-align: left">ID</th>
                    <th style="text-align: left">ИМЯ</th>
                    <th style="text-align: left">ФАМИЛИЯ</th>
                    <th style="text-align: left">ОТЧЕСТВО</th>
                    <th style="text-align: center">№ ГРУППЫ</th>
                    <th style="text-align: center">ВОЗРАСТ</th>
                    <th style="text-align: center">ПОЛ</th>
                    <th style="text-align: center">X</th>
                </tr>
                </thead>
                <tbody>           <!--Контент строки TH-->
                <?php
                 foreach ($finaly as $finaly_row){
                     echo '         
                        <tr data-row-id="'.$finaly_row['ID'].'">
                        <td style="text-align: left">'.$finaly_row['ID'].'</td>
                        <td style="text-align: left">'.$finaly_row['name'].'</td>
                        <td style="text-align: left">'.$finaly_row['lastname'].'</td>
                        <td style="text-align: left">'.$finaly_row['patronymic'].'</td>
                        <td style="text-align: center">'.$finaly_row['groupNamber'].'</td>
                        <td style="text-align: center">'.$finaly_row['age'].'</td>
                        <td style="text-align: center">'.$finaly_row['sex'].'</td>
                        <td style="text-align: center"><button class="btn-danger" onclick="Delete('.$finaly_row['ID'].')">x</button></td>
                    </tr>';
            }
            ?>

                </tbody>

            </table>


        </div>

    </div>
</div>


<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Удаление</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Вы действительно хотите удалить запись?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="Confermed_delete_button" onclick="Confermed_delete()" class="btn btn-primary">Удалить</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
            </div>
        </div>
    </div>
</div>



<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script type="text/javascript" src="script.js"></script>
</body>
</html>
