<?php
    $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/images/' . basename($_FILES['photo']['name']);
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . $uploadfile;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo ('Успешно сохранено!');
        $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'sait_tool');
        if ($mysqli->connect_errno) {
            echo "Все плохо:" . $mysqli->connect_error;
        }
        $query ="INSERT INTO `images` (`path`) VALUES ('$uploadfile')";
        $mysqli->query($query);
        if ($mysqli->errno) {
            echo "GG" . $mysqli->error;

        }
} else {
        echo ('Error!');
}
        

        
 
?>