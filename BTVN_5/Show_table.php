<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý MyGuests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 22px);
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px 0;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            color: #f44336;
            text-decoration: none;
            margin-left: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Quản lý MyGuests</h2>

<?php
// Thông tin kết nối
$servername = "sql110.infinityfree.com";
$username = "if0_37102118"; // Thay bằng tên người dùng của bạn
$password = "Quan190904"; // Thay bằng mật khẩu của bạn
$dbname = "if0_37102118_b5_mydb"; // Thay bằng tên cơ sở dữ liệu của bạn

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thêm người dùng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
    $conn->query($sql);
}

// Sửa người dùng
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
    $conn->query($sql);
}

// Xóa người dùng
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM MyGuests WHERE id=$id";
    $conn->query($sql);
}

// Hiển thị bảng
$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Registration Date</th>
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['firstname']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['reg_date']}</td>
                <td>
                    <form style='display:inline;' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <input type='text' name='firstname' value='{$row['firstname']}' required>
                        <input type='text' name='lastname' value='{$row['lastname']}' required>
                        <input type='email' name='email' value='{$row['email']}' required>
                        <button type='submit' name='edit'>Sửa</button>
                    </form>
                    <a href='?delete={$row['id']}' onclick='return confirm(\"Bạn có chắc chắn muốn xóa?\");'>Xóa</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}

// Form thêm người dùng
echo "<h3>Thêm người dùng</h3>
      <form method='POST'>
          <input type='text' name='firstname' placeholder='Firstname' required>
          <input type='text' name='lastname' placeholder='Lastname' required>
          <input type='email' name='email' placeholder='Email' required>
          <button type='submit' name='add'>Thêm</button>
      </form>";

// Đóng kết nối
$conn->close();
?>

</body>
</html>