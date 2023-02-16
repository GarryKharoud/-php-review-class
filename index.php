<?php

    $sql = "SELECT id, first_name, last_name, email, date_of_birth, profile FROM authors";
    require_once("./connect.php");

    $rows = [];
    if($conn)
    {
        $rows = $conn->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./new_author.php">New Author</a></li>
        </ul>
    </nav>
    <h1>Authors</h1>
    <table>
        <tr>
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Profile URL</th>
            </thead>

            <tbody>
                <?php foreach($rows as $row):?>
                    <tr>
                        <td>
                            <td><?=$row->id?></td>
                            <td><?=$row->first_name?></td>
                            <td><?=$row->last_name?></td>
                            <td><?=$row->email?></td>
                            <td><?=$row->date_of_birth?></td>
                            <td><?=$row->profile?></td>
                            <td>
                                <a href="./edit_author.php?id=<?=$row->id?>">Edit</a>
                            </td>
                            <td>
                                <a href="./delete_author.php?id=<?=$row->id?>" onclick="return confirm('Are you absolutely sure you want to delete it')">Delete</a>
                            </td>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </tr>
    </table>
</body>
</html>