<?php include 'db.php'?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="" method="POST">
        Name: <input type="text" name="name" value="<?= $student['name']?>"><br><br>
        Email : <input type="text" name="email" value="<?=$student['email']?>"><br><br>
        Course: <input type="text" name="course" value="<?=$student['course'] ?>"><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>

<?php 
    $id = $_GET['id'];
    $sql = 'SELECT * FROM students';
    $result_query = $conn->query($sql);
    $student = $result_query->fetch_assoc();

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $update_query = "UPDATE students SET name=$name, email=$email, course=$course 
                         WHERE id = $id";

        header("Location:index.php");


    }
?>