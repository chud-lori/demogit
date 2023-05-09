<?php
include("connection.php");
include("formprocess.php");
?>

<!doctype html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>List User</title>

    <style>
        .inline-80 {
            display: inline-block;
            width: 80px;
        }
    </style>
</head>

<body>
    <div>
        &nbsp;
    </div>

    <div class="container" id="listing">
        <h3>List Users</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Message</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT * FROM users";
                $query = mysqli_query($conn, $sql);
                while ($user = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['name'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $user['dateofbirth'] . "</td>";
                    echo "<td>" . $user['phone'] . "</td>";
                    echo "<td>" . $user['url'] . "</td>";
                    echo "<td>" . $user['message'] . "</td>";
                    echo "<td>" . $user['gender'] . "</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $user['id'] . "' class='btn btn-default'>Edit</a> &nbsp; ";
                    echo "<a href='hapus.php?id=" . $user['id'] . "' class='btn btn-default'>Delete</a>";
                    echo "</td>";

                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>