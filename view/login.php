<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Login | PHP Motors</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php' ?>
        </header>
        <nav>
             <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; ?>
        </nav>
        <main>
            <h1>Sign in</h1>
             <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form action="/phpmotors/accounts/index.php" method="post">
                <div>
                    <label for="clientEmail">Email</label> <br/>
                    <input type="email" name="clientEmail" id="clientEmail" required>
                </div>
                <div>
                    <label for="clientPassword">Password</label><br/>
                    <input type="password" name="clientPassword" id="clientPassword" required>
                </div>
                <button type="submit" class="primary" style="margin: 10px 0; padding: 10px; background-color: #4c96d7; cursor:pointer;">Sign in</button><br/>
            <a href="/phpmotors/accounts/index.php?action=registration">Not a member yet?</a>
            </form>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php' ?>
        </footer>
    </div>

</body>
</html>