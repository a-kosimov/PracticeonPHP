<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <?php require "./blocks/header.php"; ?>
    <div classs="container mt-5" >
    <h3> Контактная форма</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"></br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea></br>
        <button type="submit" name="send" class="btn btn-success">Отправить </button>

    </form>
</div>

    <?php require "./blocks/footer.php"; ?>
</body>
</html>