<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
        } 
    </style>
</head>
<body>
    <h1>Form Pendaftaran Siswa Baru</h1>
    <form action="process_input.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <p>Gender:</p>
            <input type="radio" name="gender" id="male" value="Male" checked>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="Female">
            <label for="female">Female</label>
        </div>

        <div>
            <label for="address">Address:</label><br>
            <textarea name="address" id="address" cols="30" rows="10" required></textarea>
        </div>

        <div>
            <label for="major">Major:</label>
            <select name="major" id="major">
                <option value="Science Major">Science Major</option>
                <option value="Social Major">Social Major</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Accounting">Accounting</option>
                <option value="Marketing">Marketing</option>
            </select>
        </div>

        <div>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>