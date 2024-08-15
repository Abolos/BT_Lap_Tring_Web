<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT3_2</title>
</head>
<body>

    <h1>Kiểm tra số nguyên tố </h1>
    <form method="post">
        <label for="number">Nhập số:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Kiểm tra">
       
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $number = $_POST["number"];
        $result = So_nguyen_to($number);
        if ($result){
            echo "<br>$number là số nguyên tố";
        }else {
            echo "<br>$number không là số nguyên tố";
        }
    }
    
    function So_nguyen_to($num) {
        if ($num <= 1) {
            return false;
        }
    
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
    
        return true;
    }
 ?>
</body>
</html>