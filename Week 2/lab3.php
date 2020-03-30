<? $nameErr = $emailErr = "";
$name = $email = ""; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form method="post">
        Name: <input type="text" name="name" /><br />
        E-mail: <input type="text" name="email" /><br />
        <input type="submit" /><br><br><br>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
        <h1>De gegevens zijn</h1>
            Welcome <?= htmlspecialchars($_POST["name"]); ?><br>
            Your email address is: <?= htmlspecialchars($_POST["email"]); ?>
    <?php } ?>
</body>

</html>