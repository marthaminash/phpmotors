<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Register | PHP Motors</title>
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
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
            <form action="/phpmotors/accounts/index.php" method="post">
                <label for="clientFirstname">First Name*</label><br/>
                <input type="text" name="clientFirstname" id="clientFirstname" required><br/>
                <label for="clientLastname">Last Name*</label><br/>
                <input type="text" name="clientLastname" id="clientLastname" required><br/>
                <label for="clientEmail">Email*</label><br/>
                <input type="email" name="clientEmail" id="clientEmail" required><br/>
                <label for="clientPassword">Password</label><br>
                <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> <br>
                <input type="password" name="clientPassword" id="clientPassword" required><br><br>
                <button type="button" class="show-password" style="padding: 10px; background-color: #3A3A3A; color: #ffffff; cursor: pointer;">Show Password</button><br/>
                <button type="submit" name="submit" class="primary" style="padding: 10px; background-color: #4c96d7; margin-top: 10px;">Register</button>  <br/>
                <input type="hidden" name="action" value="register">
            </form>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php' ?>
        </footer>
    </div>

</body>
</html>