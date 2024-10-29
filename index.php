<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Geoffrey</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
        <div id="containerME">
            <div id="me">
                <img id="myHead" src="image/gedelrieu.jpeg" alt="une photo de moi !" />
                <section>
                    <article>
                        <h2>Présentation</h2>
                        <p>
                            Salut ! Je suis...
                            <a id="lire_suite" href="index_presentation.php">Lire la suite !</a>
                        </p>
                    </article>
                </section>
                <section>
                    <article>
                        <h2>Un peu plus sur moi...</h2>
                        <p>
                            Je suis plutôt ...
                            <a id="lire_suite" href="index_divers.php">Lire la suite !</a>
                        </p>
                    </article>
                </section>
            </div>
            <div id="links">
                <aside>
                    <p>Mes réseaux :</p>
                    <ul>
                        <li>
                            <a href="https://github.com/Z2VvZ2Vv"><img src="image/github.png" alt="Mon GitHub" /></a>
                        </li>
                        <li>
                            <a href="https://x.com/Z2VvZ2Vv"><img src="image/x_logo.png" alt="Mon X" /></a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>