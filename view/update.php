<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="access/css/create.css" rel="styleSheet">
    <title>Update cầu thủ</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .form-create {
        width: 500px;
    }

    .input-group {
        margin-bottom: 10px;
    }

    .title {
        text-align: center;
    }

    body {
        background-image: url("https://www.shutterstock.com/image-photo/textured-soccer-game-field-center-600nw-2436832977.jpg");
        background-size: cover;
    }
    </style>
</head>

<body>
    <form method="POST" action="index.php?action=update" class="form-create container">
        <h2 class="title">Update cầu thủ</h2>
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $dataID->getTencauthu(); ?>" name="tencauthu"
                placeholder="Tên cầu thủ">
        </div>
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $dataID->getTuoi(); ?>" name="tuoi"
                placeholder="Tuổi">
        </div>
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $dataID->getQuocTich(); ?>" name="quoctich"
                placeholder="Quốc tịch">
        </div>
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $dataID->getVitri(); ?>" name="vitri"
                placeholder="Vị trí">
        </div>
        <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $dataID->getLuong(); ?> $" name="luong"
                placeholder="Lương">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</body>

</html>