<?php

$uploaddir = 'tests/';
$uploadfile = $uploaddir . basename($_FILES['testfile']['name']);

if ($_FILES["testfile"]["size"] > 1024*1024*1024) {
    echo ("Размер файла превышает три мегабайта");
    exit;
}

if (move_uploaded_file($_FILES['testfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и успешно загружен на сервер\n";
} else {
    echo "Произошла ошибка\n";
}

?>

<a href="admin.php"><div style="background: lightgrey; display: inline-block; float: left; margin-right: 10px; padding: 5px;"><---- Назад</div></a>
