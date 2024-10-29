<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div id="contact">
      <form action="submit_form.php" method="post">
        <p>Me contacter :</p>
        <label for="name">Nom : *</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email : *</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" />

        <label for="reason">Motif de contact : *</label>
        <select id="reason" name="reason">
          <option value="information">Demande d'information</option>
          <option value="support">Support technique</option>
          <option value="feedback">Retour d'expérience</option>
          <option value="other">Autre</option>
        </select>

        <br />

        <label for="appointment">Créneau horaire :</label>
        <input type="datetime-local" id="appointment" name="appointment" />

        <p>Est-ce votre première demande ? *</p>
        <div id="first_request">
          <input
            type="radio"
            id="first_request_yes"
            name="first_request"
            value="oui"
          />
          <label for="first_request_yes">Oui</label>
          <input
            type="radio"
            id="first_request_no"
            name="first_request"
            value="non"
          />
          <label for="first_request_no">Non</label>
        </div>

        <br />

        <label for="message">Votre messge : *</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>

        <button type="reset">Réinitialiser</button>
      </form>
    </div>

    <footer id="footer">
      <p>IUT Clermont Auvergne - 1A Info</p>
    </footer>
  </body>
</html>
