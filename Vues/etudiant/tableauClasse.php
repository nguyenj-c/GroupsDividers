<?php
$vue = $A_vue['AffichageClasse'];
echo "<table>";
foreach ($vue as $value) {
    foreach ($value as $name) {
            echo '<tr><td>';
            print_r($name);
            echo '</td></tr>';
    }
}
echo "</table>";
echo "<a href='..'>Retour à l'accueil</a>";
