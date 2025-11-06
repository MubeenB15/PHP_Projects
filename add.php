<?php include 'db.php' ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2> Add Student</h2>
    <form action="" method="post">
        Name : <input type="text" name="name"><br><br>
        Email : <input type="text" name="email"><br><br>
        Course : <input type="text" name="course"><br><br>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>

<?php
  //print_r($_POST);exit;
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $sql = "INSERT INTO students (name,email,course) values ('$name','$email','$course')";
        //print_r($sql);

        $conn->query($sql);
        //header("Location: index.php");
    }
?>