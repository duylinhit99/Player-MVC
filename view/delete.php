<?php
    require_once __DIR__ . '/../controller/PlayerController.php';
    $playerController = new PlayerController($con);
    $id = $_GET['id'];
    echo $id;
    $playerController->delete($id);
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
    body {
        background-image: url("https://www.shutterstock.com/image-photo/textured-soccer-game-field-center-600nw-2436832977.jpg");
        background-size: cover;
    }

    .form-create {
        width: 400px;
        height: 100px;
        background-color: #9999CC;
        text-align: center;
        color: #006666;
        margin-top: 200px;
    }

    .title {
        font-size: 20px;
    }

    .input-group {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <form method="POST" action="../index.php?action=delete" class="form-create container">
        <h2 class="title">Bạn có muốn xóa không</h2>
        <button type="submit" name="delete" class="btn btn-light">Yes</button>
        <a type="submit" href="home.php" class="btn btn-light">No</a>
    </form>
</body>

</html> -->