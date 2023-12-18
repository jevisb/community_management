<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Records</title>
    <style>
        #main-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="main-content">
        <h2>All Records</h2>
        <?php
        include 'config.php';

        $sql = "SELECT * FROM contactus";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
            <thead>
                <th>Id</th>
                <th>Message</th>
                <th>From</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else {
            echo "<h2>No Record Found</h2>";
        }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
