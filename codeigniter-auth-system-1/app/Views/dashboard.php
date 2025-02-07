<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Your Dashboard</h1>
        <p>You are logged in as: <?php echo $_SESSION['user_email']; ?></p>
        <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
    </div>
</body>
</html>