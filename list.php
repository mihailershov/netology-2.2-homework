<?php

    // Определяем массив со всеми файлами из папки с тестами
    $allFiles = glob('tests/*.json');

    // Определяем загружаемый файл
    $uploadfile = 'tests' . basename($_FILES['testfile']['name']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles/list.css">
</head>
<body>
    <a href="admin.php" class="back"><div>< Назад</div></a>
    <hr>

    <!-- Цикл, который выводит список всех загруженных файлов -->

    <?php foreach ($allFiles as $file): ?>

        <div class="file-block">
            <h1><?php echo str_replace('tests/', '', $file); ?></h1><br>
            <em>Загружен: <?php echo date("d-m-Y H:i", filemtime($file)) ?></em><br>
            <a href="test.php?number=<?php echo array_search($file, $allFiles); ?>">Перейти на страницу с тестом ></a>
        </div>
        <hr>

    <?php endforeach; ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/list.js"></script>
</body>
</html>