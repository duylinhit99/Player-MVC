<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<style>
body {
    background-image: url("https://c4.wallpaperflare.com/wallpaper/281/16/887/spain-cr7-spain-real-madrid-wallpaper-preview.jpg");
    background-size: cover;
}

h2 {
    color: #66CCCC;
}

.btn-create {
    margin-bottom: 10px;
}

.table {
    background-color: #FF6633;
    text-align: center;
}

.pagination {
    width: 300px;
    margin: 0 auto;
}
</style>

<body>
    <div class="container">
        <form class="row g-3" method="GET" action="">
            <div class="col-auto">
                <input type="text" class="form-control" name="key" placeholder="Search">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
            <div class="col-auto">
                <input type="hidden" name="action" value="search">
            </div>
        </form>
    </div>
    <div class="container mt-3">
        <h2>Quản lý danh sách cầu thủ CLB Real Madrid</h2>
        <a href="index.php?action=create" class="btn btn-primary btn-create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Vị trí</th>
                    <th>Lương</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataID as $value): ?>
                <tr>
                    <td><?php echo $value->getTencauthu(); ?></td>
                    <td><?php echo $value->getTuoi(); ?></td>
                    <td><?php echo $value->getQuoctich(); ?></td>
                    <td><?php echo $value->getVitri(); ?></td>
                    <td><?php echo $value->getLuong(); ?>$</td>
                    <td>
                        <a href="index.php?action=update&id=<?php echo $value->getId(); ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $value->getId(); ?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</body>

</html>