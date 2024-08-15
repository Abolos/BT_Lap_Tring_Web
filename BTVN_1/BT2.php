<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT2</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: 0;
        }
        table {
            border-collapse:collapse ;
            width: 400px;
            margin-top: 30px;
            margin-right: auto;
            margin-left: auto;
        }
        table,tr,td {
            border: solid 1px black;
            text-align: center;
        }

        td {
            width: 33%;
        }
        .tittle{
            font-size:15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php 
       echo "<table>";
       echo "<tr class='tittle'>
            <td>STT</td>
            <td>Tên sách</td>
            <td>Nội dung sách</td>
            </tr>";
        for ($i=1; $i <=100 ; $i++) { 
            echo "<tr>
            <td>$i</td>
            <td>tensach$i</td>
            <td>noidung$i</td>
            </tr>";
        }
       
    ?>
</body>
</html>