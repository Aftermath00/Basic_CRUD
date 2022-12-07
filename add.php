<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
</head>

<body>
    <h3>
        <a href="index.php">Back</a>
        <p>Add Student Data</p>
    </h3>

    <form action="add_process.php" method="post">
        <table>
            <tr>
                <td>Student ID</td>
                <td> : </td>
                <td><input type="number" name="nim" required></td>
            </tr>

            <tr>
                <td>Full Name</td>
                <td> : </td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>
                    <select name="gender" required>
                        <option>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td> : </td>
                <td><input type="text" name="alamat" required></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>