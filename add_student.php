<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db_connect.php";

    $fullname = trim($_POST['fullname']);
    $student_code = trim($_POST['student_code']);
    $email = trim($_POST['email']);

    $sql = "INSERT INTO students (fullname, student_code, email) 
            VALUES (:fullname, :student_code, :email)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':student_code', $student_code);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $message = "Thêm sinh viên thành công!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
</head>
<body>
    <h2>Thêm sinh viên</h2>

    <?php
    if (!empty($message)) {
        echo "<p style='color:green;'>$message</p>";
    }
    ?>

    <form method="post">
        <label>Họ tên:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Mã sinh viên:</label><br>
        <input type="text" name="student_code" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Thêm mới</button>
    </form>
</body>
</html>
