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
          <h2>Présentation</h2>
          <p>
            Salut ! Je suis en <strong>BUT Info</strong> à l'<strong
              >IUT Clermont Auvergne</strong
            >
            ! Je viens de <strong>Moulins dans l'Allier</strong>. Je souhaite
            aujourd’hui accéder parfaitement à mes aspirations professionnelles.
          </p>
          <p>J'étais au lycée Théodore de Banville !</p>
          <p>Et j'ai eu mon BAC général avec la mention Bien !</p>
          <iframe
            id="maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.9301875132287!2d3.325156976666172!3d46.56884587111348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f11c492507147b%3A0xf5f4a588e1025a56!2sLyc%C3%A9e%20Th%C3%A9odore%20de%20Banville!5e0!3m2!1sfr!2sfr!4v1725624243553!5m2!1sfr!2sfr"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <p>Voici l'emplacement de mon lycée !</p>
        </article>
      </section>
      <section class="sections_texte">
        <article>
          <h2>Un peu plus sur moi...</h2>
          <p>
            Je suis plutôt ...
            <a id="lire_suite" href="index_divers.php">Lire la suite !</a>
          </p>
        </article>
      </section>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
