<?php
    require "config.php";
    $sql_select = "SELECT * FROM student";
    $statement = $conn->query($sql_select);
    $students = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Siswa</title>
</head>
<body>
    <h1>Students who are registered</h1>
    <a href="form_input.php">[+]Add New</a>
    <?php if(count($students) > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>No. 123</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Major</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($students as $student) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $student["name"]; ?></td>
                        <td><?= $student["gender"]; ?></td>
                        <td><?= $student["address"]; ?></td>
                        <td><?= $student["major"]; ?></td>
                        <td>
                            <a href="process_delete.php?id=<?= $student["id"]; ?>" onclick="return confirm('Do you want to delete this data?')">Delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>    
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h3>No one is currently registered.</h3>
    <?php endif; ?>
</body>
</html>