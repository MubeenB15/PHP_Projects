<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h2> Students</h2>
    <a href="add.php">Add Student</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        <?php
        //  $result = $conn->query("select * from students");
        //  echo($result);exit;

         $result = $conn->query("SELECT * FROM students");

        if (!$result) {
            die("Query Failed: " . $conn->error);
        }else
        echo ($result);


         while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?=row['id']?></td>
                <td><?=row['name']?></td>
                <td><?=row['email']?></td>
                <td><?=row['course']?></td>
                <td>
                    <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                    <a href="delete.php?id=<?=$row['id']?>">Delete</a>
                </td>
            </tr>
         <?php  } ?>
        </table>


        
    </table>
</body>
</html>