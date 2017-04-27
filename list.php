<?php
    $allFiles = glob('_tests/*.json');
    $uploadfile = '_tests' . basename($_FILES['testfile']['name']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: sans-serif;
        }
        body {
            max-width: 1420px;
            margin: auto;
        }
        h1 {
            display: inline
        }
        a {
            display: inline
        }
    </style>
</head>
<body>
    <?php foreach ($allFiles as $file): ?>
        <div>
            <h1><?php echo str_replace('_tests/', '', $file); ?></h1>
            <a href="#">Перейти на страницу с тестом</a>
            <div class="show-content">Показать содержимое файла >>></div>
        </div>
    <?php endforeach; ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/list.js"></script>
</body>
</html>