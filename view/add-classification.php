    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Add classification | PHP Motors</title>
</head>
<body>
    <div class="wrapper">
        <header>
           <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
           <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; ?>
        </nav>
       <main>
        <?php
            if (isset($message)) {
                echo $message;
            }
        ?>
        <h1>Add Car Classification</h1>
         <form method="post" action="/phpmotors/vehicles/index.php">
            <label for="class-name">Classification Name</label></br>
            <input type="text" placeholder="Enter Here" name="classificationName" id="classificationName" <?php if(isset($classificationName)){echo "value='$classificationName'";}  ?> required><br><br>
            <button type="submit">Add Classification</button>
            <input type="hidden" name="action" value="add-classfication">
        </form>
    </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php' ?>
        </footer>
    </div>

</body>
</html>
