<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "login.php"; // Incluye el archivo login.php si se envió un formulario POST
} else {
    include "admin.html"; // Incluye el formulario de inicio de sesión si no se envió un formulario POST
}
?>

</body>
</html>

