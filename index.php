<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>
<h2>Add Student</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Course: <input type="text" name="course" required><br><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
include "db.php";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $query = "INSERT INTO students(name,email,course) 
              VALUES('$name','$email','$course')";

    if (mysqli_query($conn, $query)) {
        echo "Student Added Successfully";
    } else {
        echo "Error";
    }
}
?>
</body>
</html>
