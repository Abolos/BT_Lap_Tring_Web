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

        form button {
            background-color: #009999;
            border: none;
            padding: 7px 10px;
        }

        form button a {
            text-decoration: none;
            color:  black;
        }

    </style>
</head>
<body>
    <form method="post" action="Bai_3_result.php" name="cac_phep_tinh">
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <table>
            <tr class="tittle">
                <td class="th">Chọn phép tính:</td>
                <td><input type="radio" name="operation" value="Tong"> Tổng</td>
                <td><input type="radio" name="operation" value="Hieu"> Hiệu</td>
                <td><input type="radio" name="operation" value="Tich"> Tích</td>
                <td><input type="radio" name="operation" value="Thuong"> Thương</td>
            </tr>
            <tr class="number">
                <td class="th">Số thứ nhất:</td>
                <td colspan="4"><input style="width: 100%;" type="number" name="num1"></td>
            </tr>
            <tr class="number">
                <td class="th">Số thứ hai:</td>
                <td colspan="4"><input style="width: 100%;" type="number" name="num2"></td>
            </tr>
            <tr>
                <td></td>
                <td ><button type="submit" >
                    Tính
                </button></td>
            </tr>       
           
        </table>
    </form>

</body>
</html>