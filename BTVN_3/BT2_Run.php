<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
            font-size: 16px;
        }
        .highlight {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);
        $email = htmlspecialchars($_POST["email"]);
        $InvoiceID = htmlspecialchars($_POST["InvoiceID"]);

        // Lấy giá trị từ các checkbox
        $pay_for = [];
        for ($i = 1; $i <= 11; $i++) {
            if (isset($_POST["pay_for" . $i])) {
                $pay_for[] = htmlspecialchars($_POST["pay_for" . $i]);
            }
        }

        echo "<h2>Kết quả nhập liệu</h2>";
        echo "<p><span class='highlight'>Firstname:</span> " . $firstname . "</p>";
        echo "<p><span class='highlight'>Lastname:</span> " . $lastname . "</p>";
        echo "<p><span class='highlight'>Email:</span> " . $email . "</p>";
        echo "<p><span class='highlight'>InvoiceID:</span> " . $InvoiceID . "</p>";
        echo "<p><span class='highlight'>Danh mục sản phẩm:</span> ";

        // Kiểm tra và hiển thị danh mục sản phẩm
        if (count($pay_for) > 0) {
            echo implode(", ", $pay_for); // Hiển thị danh sách sản phẩm, ngăn cách bằng dấu phẩy
        } else {
            echo "Không có sản phẩm nào được chọn."; // Thông báo nếu không có sản phẩm
        }
        echo "</p>";
        ?>
    </div>
</body>
</html>