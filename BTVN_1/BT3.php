<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3</title>
    <style>
        form {
            margin-top: 35px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 400px;
            border: 2px solid red;
        }

        .tinh {
           margin-left: 5px;
           background-color: aqua;
           width: 80px;
           border: 2px solid red;
        }

        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h3>Calculator</h3>
        <p><label for="">Number 1</label> <input type="number" name="num1"></p>
        <p><label for="">Number 2</label> <input type="number" name="num2"></p>
        <input type="radio" name="operation" value="Tong"> Tổng
        <input type="radio" name="operation" value="Hieu"> Hiệu
        <input type="radio" name="operation" value="Tich"> Nhân
        <input type="radio" name="operation" value="Thuong"> Chia
        <input class="tinh" type="submit" name="submit" value="Tính">
        <p><label for="">Kết Quả</label> <input type="number" name="result" readonly></p>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "Tong":
                    $result = Tong($num1, $num2);
                    break;
                case "Hieu":
                    $result = Hieu($num1, $num2);
                    break;
                case "Tich":
                    $result = Tich($num1, $num2);
                    break;
                case "Thuong":
                    if ($num2 == 0) {
                        $result = "Không thể chia cho 0";
                    } else {
                        $result = Thuong($num1, $num2);
                    }
                    break;
                default:
                    $result = "Vui lòng chọn phép tính";
            }

            echo "<script>document.getElementsByName('result')[0].value = '$result';</script>";
        }

        function Tong($a, $b) {
            return $a + $b;
        }


        function Hieu($a, $b) {
            return $a - $b;
        }

        function Tich($a, $b) {
            return $a * $b;
        }

        function Thuong($a, $b) {
            return $a / $b;
        }

    ?>
</body>
</html>