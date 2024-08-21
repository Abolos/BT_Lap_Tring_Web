<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
    <style>
        form table .th {
            float: right;
        }
        form h2 {
            text-align: center;
            color: #009999;
        }
        form {
            border: solid 4px #009999;
            width: 450px;
            margin: auto;
            padding-left: 40px;
            padding-bottom: 40px;
        }

        .tittle td {
            color: red;
        }

        .number .th {
            color: blue;
        }


        form  a {
            color: purple;
        }

    </style>
</head>
<body>
    <?php
        include_once "Bai_3_function.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "Tong":
                    $result = Tong($num1, $num2);
                    break;
                case "Hieu":
                    $result = Hieu($num1,$num2);
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
        }

        ?>
<form method="post" action="Bai_3_result.php" name="cac_phep_tinh">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <table>
            <tr class="tittle">
                <td class="th">Chọn phép tính:</td>
                <td><?php echo htmlspecialchars($operation) ?></td>
            </tr>
            <tr class="number">
                <td class="th">Số 1:</td>
                <td colspan="4"><input style="width: 100%;" type="number" name="num1" value="<?php echo htmlspecialchars($num1) ?>"></td>
            </tr>
            <tr class="number">
                <td class="th">Số 2:</td>
                <td colspan="4"><input style="width: 100%;" type="number" name="num2" value="<?php echo htmlspecialchars($num2) ?>"></td>
            </tr>
            <tr class="number">
                <td class="th">Kết quả:</td>
                <td colspan="4"><input style="width: 100%;" type="number" name="result" value="<?php echo htmlspecialchars($result) ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td ><a href="Bai_3_index.php">Quay lại trang trước</a></td>
            </tr>   
        </table>
    </form>
</body>
</html>