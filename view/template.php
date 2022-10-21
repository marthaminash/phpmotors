<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Template | PHP Motors</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php' ?>
        </header>
        <nav>
             <?php echo $navList; ?>
        </nav>
        <main>
           <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/main.php' ?>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php' ?>
        </footer>
    </div>

</body>
</html>