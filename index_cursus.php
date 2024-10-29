<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon cursus scolaire</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="main">
      <section class="sections_texte">
        <article>
          <div id="college">
            <h3>1. Collège Achille Allier</h3>
            <img src="image/college.jpg" alt="Mon collège" />
            <p>
              De 2017 à 2021, j'ai réalisé mes années de collège ici ! J'ai eu
              le brevet <strong>mention bien !</strong>
            </p>
          </div>
          <div id="lycee">
            <h3>2. Lycée Théodore de Banville</h3>
            <img src="image/photo_banville.jpeg" alt="Photo de mon lycée" />
            <p>
              De 2021 à 2024, j'ai réalisé mes anéees de lycée ici ! Avec la spé
              <strong>maths et NSI</strong>. J'ai eu le bac
              <strong>mention bien</strong>.
            </p>
          </div>
        </article>
      </section>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
