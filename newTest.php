<?php

$allFiles = glob('_tests/*.json');
$uploaddir = '_tests/';
$uploadfile = $uploaddir . basename($_FILES['testfile']['name']);

if (in_array($uploadfile, $allFiles, true)) {
    $result = "Файл с таким именем уже существует.";
} else if ($_FILES["testfile"]["size"] > 1024 * 1024 * 1024) {
    $result = "Размер файла превышает три мегабайта";
} else if (move_uploaded_file($_FILES['testfile']['tmp_name'], $uploadfile)) {
    $result = "Файл корректен и успешно загружен на сервер\n";
} else {
    $result = "Произошла ошибка\n";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
            line-height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            max-width: 1420px;
            margin: auto;
        }
        hr {
            margin: 20px 0
        }
        a div {
            background: lightgrey;
            display: inline;
            float: left;
            margin-right: 10px;
            padding: 5px;
            margin-left: 20px;
            margin-top: 20px;
        }

        .info {
            display: inline;
            float: left;
            padding: 5px;
            margin-top: 20px;
        }

        pre {
            padding-left: 20px;
        }

        .clearfix {
            clear: both;
        }

        h1 {
            padding-left: 20px;
            padding-top: 40px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
<a href="admin.php">
    <div>< Назад</div>
</a>
<p class="info"><?php echo $result ?></p>
<div class="clearfix"></div>
<h1>Служебная информация:</h1>
<pre>
    <?php
        print_r($allFiles);
        echo "<hr>";
        print_r($_FILES);
    ?>
    </pre>
</body>
</html>
