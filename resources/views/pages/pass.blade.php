<?php
//require_once "_temp.php";
?>

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icons/lock1.ico" type="image/x-icon">
    <title>Удобный поиск паролей</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <header class="header">
            <div class="content">
                <div class="content-image">
                    <a href="pass.php"><img src="img/lock1.png" title="Перейти на главную" width="100px"></a>
                </div>
                <div class="content-head">
                    <p>
                        Удобный поиск телефонных номеров
                    </p>
                    <p>

                    </p>
                </div>
            </div>
            <div class="search">
                <div class="search-input">
                    <form action="" method="post" id="nameform">
                        <input type="text" name="service" placeholder="Начните вводить сервис, логин или пароль">
                    </form>
                </div>
                <div class="search-button">
                    <button type="submit" form="nameform">Поиск</button>
                </div>
            </div>

            <div class="table">
                <?php
                require_once 'connection.php'; // подключаем скрипт

                $link = mysqli_connect($host, $user, $password, $database)
                or die("Ошибка " . mysqli_error($link));
                if (isset($_POST['service'])) {
                    $input = $_POST['service'];
                    $query ="SELECT * FROM `pass` WHERE `service` LIKE '%$input%' || `login` LIKE '%$input%' || `password` LIKE '%$input%' ";  //создаем переменную, в которой запрос в базу данных

                    $result = mysqli_query($link, $query) or die("Ошибка" . mysqli_error($link));      //Создаем переменную, содержащую массив
                }

                if (isset($_POST['service'])) {
                    if($result && $_POST['service'] != "")
                    {
                        $rows = mysqli_num_rows($result); // количество полученных строк; mysqli_num_rows - возвращает количество рядов результата запроса

                        echo "<table>
                  <tr>
                    <th>  </th>
                    <th>service</th>
                    <th>login</th>
                    <th>number</th>
                    <th>img</th>
                  </tr>";
                        for ($i = 0 ; $i < $rows ; ++$i)
                        {
                            $row = mysqli_fetch_row($result);
                            echo "<tr>";
                            for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
                            echo "</tr>";
                        }
                        echo "</table>";

                        // очищаем результат
                        mysqli_free_result($result);
                    }

                }
                mysqli_close($link);

                ?>
            </div>
        </header>






        <footer>
            <?php
            drawMenu($menu);
            ?>
            <div class="date">
                <span><?=date("d-m-Y H:i")?></span>
            </div>
        </footer>
    </div>
</div>

<script src="js/main.js"></script>
</body>
</html>

