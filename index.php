<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Trong Nguyen</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div id="Name">
                <h3>Trong Nguyen</h3>
                <?php echo "Hello World!"; ?>
            </div>
        </header>
        <section id="boxes">
            <div class="container">
                <div class="box">
                <h3>Quote of the day:</h3>
                    <?php require ("quote.php"); ?>
                </div>
            <div class="box">
                <img src="./img/photoP1.jpg" alt="My Dog">
            </div>
            <div class="box">
                <h3>About me:</h3>
                <p>My name is Trong Nguyen, I have a background in biochemistry.
                    I recently just quit my job to explore the domain of software engineering as a full time student.
                    To be honest, venturing down this unpaved road is a little scary but I believe this is necessary for
                    me to continue to grow and develop. Scary is exciting, life is too short to settle for anything less than butterflies, I need a dose of
                    epinephrine once in a while. I'm really excited about this opportunity and ready to learn.
                </p>
            </div>
        </div>
    </section>
    </body>
</html>