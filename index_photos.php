<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ma galerie de photos</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="photos_gallery">
      <div class="gallery">
        <a href="gallery-html/nachthun.php">
          <img src="image/NachThun.jpg" alt="Thoune" />
        </a>
        <div class="desc">Mon village préféré en Suisse (Thoune)</div>
      </div>

      <div class="gallery">
        <a href="gallery-html/ecole.php">
          <img src="image/ecole.jpg" alt="IUT Clermont-Ferrand" />
        </a>
        <div class="desc">Voici mon école en étude supérieure !</div>
      </div>

      <div class="gallery">
        <a href="gallery-html/volvo.php">
          <img src="image/volvo.jpg" alt="Volvo 240DL" />
        </a>
        <div class="desc">Ma voiture !</div>
      </div>

      <div class="gallery">
        <a href="gallery-html/setup.php">
          <img src="image/setup.jpg" alt="Setup de rêve" />
        </a>
        <div class="desc">Mon setup de rêve !</div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
