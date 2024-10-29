<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon planning</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>

  <body>
    <?php include 'header.php'; ?>
    <div id="photos_gallery">
      <div class="gallery">
        <a href="gallery-html/kaizen.php">
          <img src="image/miniaturevideopref.jpg" alt="Kaizen" />
        </a>
        <div class="desc">Ma vidéo preférée</div>
      </div>
      <div class="gallery">
        <a target="" href="gallery-html/des.php">
          <img src="image/video_des.png" alt="Video random de dès" />
        </a>
        <div class="desc">Ma vidéo de dès</div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
