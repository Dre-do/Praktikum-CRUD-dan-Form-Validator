<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validator</title>
</head>
<body>
    <H1>PRAKTIKUM FORM VALIDATOR</H1>
    <form action="validator.php" method="post">
        <label for="name">Nama: </label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>