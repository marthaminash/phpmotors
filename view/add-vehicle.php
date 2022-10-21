
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/library/connections.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/model/main-model.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
  <title>Add vehicle - PHP Motors</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php' ?>
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
    <h1>Add Vehicle</h1>
    <form method="post" action="/phpmotors/vehicles/index.php">
        <label for="class">Classification</label></br>
        <?php
            $classifications = getClassifications();
            echo '<select name="log_class" id="car-class">';
            foreach ($classifications as $classification) {
                echo '<option value="'.$classification['classificationId'].'">'.$classification['classificationName'].'</option>';
               }

        ?>
        </select><br><br>
        <label for="make">Make</label></br>
        <input for="text" placeholder="Enter a Make" name="log_make" id="make" ><br><br>
        <label for="model">Model</label></br>
        <input for="text" placeholder="Enter a Model" name="log_model" id="model"><br><br>
        <label for="description">Description</label></br>
        <textarea rows="4" cols="50" name="log_description"></textarea><br><br>
        <label for="image">Image Path</label></br>
        <input type="text" placeholder="Enter image path" name="log_image" id="image"><br><br>
        <label for="thumbnail">Thumbnail Path</label></br>
        <input for="text" placeholder="Enter thumbnail path" name="log_thumbnail" id="thumbnail"><br><br>
        <label for="price">Price</label></br>
        <input type="text" placeholder="Enter a price" name="log_price" id="price"><br><br>
        <label for="stock"># In Stock</label></br>
        <input for="text" placeholder="Enter a number" name="log_stock" id="stock"><br><br>
        <label for="color">Color</label></br>
        <input type="text" placeholder="Enter a color" name="log_color" id="color"><br><br>
        <button type="submit">Add Vehicle</button>
        <input type="hidden" name="action" value="add-vehicle-form">

    </form>
  </main>
  <footer>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
  </footer>
  </div>

</body>
</html>

