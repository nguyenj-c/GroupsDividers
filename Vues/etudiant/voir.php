<?php

echo '<section>
        <h2>Etudiant</h2>
        <p>Vous pouvez voir la liste des étudiants en LP ou tout simplement les diviser par groupes</p>
        <a href="./etudiant/tableau">Voir liste des étudiants de la LP</a>
        <form action="etudiant/groupe" method="Post">
           <label for="groupe">Entrer le nombre maximum d\'élèves par groupe</label>
           <input type="number" name="groupe" id="Nb_Grp" min="1" placeholder="Nb max étudiants par groupe: 3">
           <input type="submit" value="Envoyer">
         </form>
       </section>';
//action contient l'url etudiant/groupe pour le controleur/action, on aurait bien pu mettre http://localhost/etudiant/groupe