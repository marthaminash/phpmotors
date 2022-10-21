<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Home | PHP Motors</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/phpmotors/css/template.css" media="screen">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Home | PHP Motors</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php' ?>
        </header>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php' ?>
        </nav>
        <main>
            <h1>Welcome To PHP Motors</h1>
            <div class="delorean-section-one">
                <img src="../../phpmotors/images/delorean.jpg" alt="delorean" class="responsive">
                <div class="delorean-description">
                    <h2>DMC Delorean</h2>
                    <div id="delorean-description-text">
                        3 Cup holders
                        <br>
                        Superman doors
                        <br>
                        Fuzzy dice!
                    </div>
                    <input type="button" value="Own Today">
                </div>
            </div>
            <div class="delorean-section-two">
                <div>
                    <h2>Delorean Upgrades</h2>
                    <div class="delorean-upgrades">
                        <div class="delorean-upgrades-img">
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="flux cap">
                        </div>
                        <div class="delorean-upgrades-img">
                             <img src="/phpmotors/images/upgrades/flame.jpg" alt="flame decals">
                        </div>
                        <a href="#" target="_blank">Flux Capacitor</a>
                        <a href="#" target="_blank">Flame Decals</a>
                        <div class="delorean-upgrades-img">
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper sticker">
                        </div>
                       <div class="delorean-upgrades-img">
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub-cap">
                       </div>
                        <a href="#" target="_blank">Bumper Stickers</a>
                        <a href="#" target="_blank">Hub Caps</a>
                    </div>
                </div>

                <div class="reviews">
                    <h2>DMC Delorean Reviews</h2>
                    <ul>
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!." (5/5)</li>
                        <li>"The most futuristic ride of our day." (4.5/5)</li>
                        <li>"88's livin and I love it!" (5/5)</li>
                    </ul>
                </div>
            </div>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php' ?>
        </footer>
    </div>

</body>
</html>
    </div>

</body>
</html>