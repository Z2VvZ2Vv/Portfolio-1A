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
    <div id="main">
      <table id="planning">
        <caption>
          Planning des Activités Extra Universitaires
        </caption>
        <thead>
          <tr>
            <th rowspan="2">Date</th>
            <th rowspan="2">Activité</th>
            <th colspan="2">Horaires</th>
            <th rowspan="2">Image</th>
          </tr>
          <tr>
            <th>Début</th>
            <th>Fin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jeudi</td>
            <td rowspan="2">Piscine</td>
            <td>14:00</td>
            <td>16:00</td>
            <td rowspan="2">
              <a href="image/piscine.jpg" target="_blank"
                ><img src="image/piscine.jpg" alt="Piscine" class="thumbnail"
              /></a>
            </td>
          </tr>
          <tr>
            <td>Vendredi</td>
            <td>10:00</td>
            <td>12:00</td>
          </tr>
          <tr>
            <td>Samedi</td>
            <td>Conduite</td>
            <td>13:00</td>
            <td>15:00</td>
            <td>
              <a href="image/auto-ecole.png" target="_blank"
                ><img
                  src="image/auto-ecole.png"
                  alt="Conduite"
                  class="thumbnail"
              /></a>
            </td>
          </tr>
          <tr>
            <td>Dimanche</td>
            <td colspan="3">Loisirs</td>
            <td>
              <a href="image/loisirs.png" target="_blank"
                ><img src="image/loisirs.png" alt="Loisirs" class="thumbnail"
              /></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
