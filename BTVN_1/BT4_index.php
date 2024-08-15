<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            margin-top: 36px;
            margin-left: auto;
            margin-right: auto;
            width: 600px;
            padding: 10px;
            border: solid 1px red;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>ARRAY FUNCTION</h1>
<?php 
    include_once "BT4_funtion.php";
    $arr = [5,2,9,1,7,3];
    echo "Mang ban dau: ";
    for ($i=0;$i<count($arr);$i++){
        if ($i<count($arr)-1){
           echo "$arr[$i], ";
        }else {
           echo "$arr[$i]";
        }
    }
    echo "<br>";

    $find_max = find_max($arr);
    echo "Số lớn nhất trong mảng là: $find_max <br>";
    $find_min = find_min($arr);
    echo "Số bé nhất trong mảng là: $find_min <br>";
    $calculate_sum = calculate_sum($arr);
    echo "Tổng các phần tử trong mảng là: $calculate_sum <br>";
    sort($arr);
    echo "Mảng sau khi sắp xếp theo chiều tăng dần: ";
    print_r($arr);
    echo "<br>";
    $is_in_array = is_in_array($arr,7);
    if ($is_in_array){
        echo "7 có trong mảng";
    }else {
        echo "7 không có trong mảng";
    }
?>
</div>
</body>
</html>