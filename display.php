<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Names</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">List of Submitted Names</h2>
    <div class="card shadow-sm p-4">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="mt-3 text-center">
        <a href="index.php" class="btn btn-primary">Back to Form</a>
    </div>
</div>

</body>
</html>
