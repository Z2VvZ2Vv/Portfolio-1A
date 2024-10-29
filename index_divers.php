<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ma page d'accueil</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="main">
      <section class="sections_texte">
        <article>
          <h2>Un peu plus sur moi...</h2>
          <p>
            Je suis plutôt <strong>curieux</strong>, et j'adore l'informatique !
            Depuis mon plus jeune âge, je m'interesse au domaine de
            l'informatique, j'adore le fait de pouvoir
            <strong>concevoir des programmes !</strong>
          </p>
          <p>
            Cela me rend plutôt fiert de moi. Cette page ici sert à vous montrer
            mes <strong>capacités</strong> à pourvoir
            <strong>développer des pages Web !</strong>
          </p>
          <p>J'y arrive plutôt bien n'est-ce pas ?</p>
          <p>
            Je n'ai jamais fait parti d'association ou d'équipe de sport. Mes
            parents sont agriculteurs j'ai donc toujours aidé à la ferme !
          </p>
        </article>
      </section>
      <section class="sections_texte">
        <article>
          <h2>Présentation</h2>
          <p>
            Salut ! Je suis...
            <a id="lire_suite" href="index_presentation.php">Lire la suite !</a>
          </p>
        </article>
      </section>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
