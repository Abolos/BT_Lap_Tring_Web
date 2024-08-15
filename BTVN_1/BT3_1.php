<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT3_1</title>
</head>

<body>
    <h1>Kiểm tra số chẵn lẻ</h1>
    <form method="post">
        <label for="number">Nhập số:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Kiểm tra">
       
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $result = Chan_le($number);
        echo "$result";

    }

    function Chan_le($n){
        if ($n % 2 == 0 ){
            return "<br>$n là số chẵn";
        }else {
            return "<br>$n là số lẻ";
        }
    }
    ?>
</body>
</html>