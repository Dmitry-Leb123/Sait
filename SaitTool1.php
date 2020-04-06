<title>#_# Error #_#</title>
<link rel="shortcut icon" href="favicon.png" type=png>
<style>
   body {
    background: #00FF00 url("images13.png"); 
    color: #00FF00
   }
  </style>
 <style>
   .btn {
    display: inline-block; /* Строчно-блочный элемент */
    background: #8B008B; /* Серый цвет фона */
    color: #00FFFF; /* Белый цвет текста */
    padding: 1rem 1.5rem; /* Поля вокруг текста */
    text-decoration: none; /* Убираем подчёркивание */
    border-radius: 3px; /* Скругляем уголки */
   }
  </style>
 <body> 
  <a href="index.php" class="btn">На главную</a>
 </body>
  <b><div>
<b><div style="text-align: center;">
<?php
    include('config.php');
    $registrationSuccess = true;
    $registrationUserErrors = [];
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
    if ($mysqli->connect_errno) {
        $registrationSuccess = false;
        die("Ошибка подключения к базе данных: " . $mysqli->connect_errno . " " . $mysqli->connect_error);
    } else {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $verificationPassword = $_POST['verificationPassword'];
        
        if ($password !== $verificationPassword) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Введёные пароли не совпадают!';
        }
        if (2 > strlen($name) || strlen($name) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина имени должна быть от 2 до 32 симбволов';
        }
        if (6 > strlen($login) || strlen($login) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина логина должна быть от 6 до 32 симбволов';
        }
        if (6 > strlen($password) || strlen($password) > 20) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина пароля должна быть от 6 до 20 симбволов';
        }
        $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$loginSelect = $mysqli->query($loginQuery)) {
            $registrationSuccess = false;
            die('Ошибка запроса: '. $mysqli->error);
        } else {
            if ($loginSelect->num_rows) {
                $registrationSuccess = false;
                $registrationUserErrors[] = 'Такое существо уже обитает на этом сайте ХD';
            }
        }
        
        $hashPassword = hash('md5', $password);
        
        if ($registrationSuccess) {
            $query = "INSERT INTO `users` (`name`, `login`, `password`, `verificationPassword`) VALUES ('$name', '$login',  '$hashPassword')";
            if (!$mysqli->query($query)) {
                die('Ошибка запроса: '. $mysqli->error);
            }
        } else {
            foreach ($registrationUserErrors as $error) {
                ?>
                    <div style="color: red;">
                        <?php
                            echo($error . '<br>');
                        ?>
                    </div>
                <?php
            }
            ?> 
               
        <?php
        }

        if ($registrationSuccess) {
            ?>
                Вы успешно зарегестрировались!!!<br>
                <style>
   .btn {
    display: inline-block; /* Строчно-блочный элемент */
    background: #8B008B; /* Серый цвет фона */
    color: #00FFFF; /* Белый цвет текста */
    padding: 1rem 1.5rem; /* Поля вокруг текста */
    text-decoration: none; /* Убираем подчёркивание */
    border-radius: 3px; /* Скругляем уголки */
   }
  </style>
 <body> 
  <a href="index.php" class="btn">На главную</a>
 </body>
            <?php
        }
    }
    $mysqli->close();
?>
</div></b>
