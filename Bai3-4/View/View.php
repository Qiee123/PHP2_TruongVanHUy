<?
// include 'Controller/Controller.php';

require_once '../Controller/Controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3-4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td:first-child,
        th:first-child {
            border-left: none;
        }

        td:last-child,
        th:last-child {
            border-right: none;
        }
    </style>
</head>

<body>

    <h1> Dữ liệu người dùng từ Database</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Password</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($users) && is_array($users)) {
                foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['sdt']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><?php echo $user['create_at']; ?></td>
                    </tr>
            <?php endforeach;
            } else {
                echo "<tr><td colspan='7'>Không có dữ liệu được tim thấy.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <?

    ?>
</body>

</html>