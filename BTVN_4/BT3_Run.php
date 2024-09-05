<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Lấy Session</title>
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
           echo "<h2>THÔNG TIN NGƯỜI DÙNG LẤY TỪ SESSION</h2>";
           echo "<h4>Khi nhấn F5 hoặc biểu tượng restart nỗi dung sẽ không thay đổi </h4>";
           $_SESSION["fistname"] = htmlspecialchars($_POST["firstname"]);
           $_SESSION["lastname"] = htmlspecialchars($_POST["lastname"]);
           $_SESSION["email"] = htmlspecialchars($_POST["email"]);
           
           echo "FirstName is: ". $_SESSION["fistname"] . "<br>";
           echo "LastName is: ". $_SESSION["lastname"] . "<br>";
           echo "Email is: ". $_SESSION["email"] . "<br>";

        ?>
    </div>
</body>
</html>