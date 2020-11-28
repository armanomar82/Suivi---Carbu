<!DOCTYPE html>

<?php include ("head.php"); ?>
<main>   
    <?php
    if (isset($_COOKIE["plein"])) {

        echo "<table>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L</th>"
            ."<th>Conso</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          echo "<tr>"
          ."<td>$datePlein</td>"
          ."<td>$prixLitre</td>"
          ."<td>$moyenneLitresAuCent</td>"
          ."</tr>";

        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Ajouter un plein pour commencer</p>";

      }
    ?>
    </br>
    <div class="main__link">
      <a class="btn btn-blue" href="ajout--formulaire.php">ajouter</a>
    </div>
  </main>
  <footer></footer>

</body>
</html>