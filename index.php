<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Enter Your Name</h2>
    <div class="card shadow-sm p-4">
        <form action="save.php" method="POST" id="nameForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
    <div class="mt-3 text-center">
        <a href="display.php" class="btn btn-success">View Submitted Names</a>
    </div>
</div>

<script>
document.getElementById("nameForm").addEventListener("submit", function(e) {
    if(document.getElementById("name").value.trim() === "") {
        e.preventDefault();
        alert("Please enter a name!");
    }
});
</script>

</body>
</html>
