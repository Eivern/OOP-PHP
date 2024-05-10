<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
    session_start();
    ?>
</head>

<body>
    <?php
    if (isset($_GET['success'])) echo "<h1>Welcome! berhasil login kyaaaa</h1>";
    ?>
    <h3>Kamu login dengan username :
        <?= $_SESSION['username'] ?></h3>
</body>

</html>