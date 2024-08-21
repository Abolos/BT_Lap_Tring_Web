<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .main {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-top: 0;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #45a049;
    }

    .result {
        margin-top: 20px;
    }
</style>
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