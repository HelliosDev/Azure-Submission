<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Upload Gambar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, rgba(98, 13, 196, 0.9), rgba(12, 91, 161, 0.9)) fixed, url(../images/typing.jpg) fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #FFF;
        }
        h1, h2 {
            text-align: center;
        }
        input {
            display: block;
            margin : 50px auto;
        }
        input[type="submit"] {
            width: 200px;
            height: 50px;
            padding: 0px;
            outline: none;
            color: #FFF;
            background: #53CC3C;
            border: 1px solid #95989A;
            border-radius: 1000px;
            box-shadow: 0 5px 6px rgba(0, 0, 0, 0.16);
        }
    </style>
</head>
<body>
    <h1>Upload Gambar</h1>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        <h2>Masukkan Gambar Disini</h2>
        <input type="file" name="gambar" accept="image/*" required>
        <input type="submit" name="submit" value="Submit Gambar">
    </form>
</body>
</html>