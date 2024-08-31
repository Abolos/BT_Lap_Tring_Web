<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .result {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        h2 {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <?php
    $x = htmlspecialchars($_POST["Tensach"]);
    $y = htmlspecialchars($_POST["Tacgia"]);
    $z = htmlspecialchars($_POST["NSX"]);
    $t = htmlspecialchars($_POST["NXB"]);
    ?>

    <div class="result">
        <h2>Thông tin sách</h2>
        <p><strong>Tên Sách:</strong> <?php echo $x; ?></p>
        <p><strong>Tác giả:</strong> <?php echo $y; ?></p>
        <p><strong>Nhà sản xuất:</strong> <?php echo $z; ?></p>
        <p><strong>Năm xuất bản:</strong> <?php echo $t; ?></p>
    </div>
</body>
</html>