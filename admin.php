<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<form action="list.php" id="load-json" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Загрузите свой тест в формате json</legend>
        <input type="file" name="testfile" required>
        <input type="submit" value="Добавить в базу">
    </fieldset>
</form>

<form action="list.php" id="create-json">
    <fieldset>
        <legend>Или создайте тест прямо на сайте</legend>
        <div class="question-block1 question-container">
            <p class="question-number">1 вопрос</p>
            <div class="question">
                <p>Вопрос: </p><input type="text" name="question1" required><br>
            </div>
            <p>Ответ 1: </p><input type="text" name="answer1" class="answer" required><br>
            <p>Ответ 2: </p><input type="text" name="answer2" class="answer" required><br>
            <p>Ответ 3: </p><input type="text" name="answer3" class="answer"><br>
            <p>Ответ 4: </p><input type="text" name="answer4" class="answer"><br>
            <p class="correct-answer-p">Правильный ответ:</p>
            <div class="correct-answer">
                    1<input type="radio" name="radiobutton" class="first-correct">&nbsp;&nbsp;&nbsp;
                    2<input type="radio" name="radiobutton" class="second-correct">&nbsp;&nbsp;&nbsp;
                    3<input type="radio" name="radiobutton" class="third-correct">&nbsp;&nbsp;&nbsp;
                    4<input type="radio" name="radiobutton" class="fourth-correct">
            </div>
        </div>
        <div class="buttons">
            <input type="submit" name="create">
            <button id="add-question" type="button">Добавить еще один вопрос</button>
        </div>
    </fieldset>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="admin.js"></script>
</body>
</html>
