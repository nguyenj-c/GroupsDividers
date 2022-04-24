<?php

$vue = $A_vue['GroupeEtu'];
echo "<table>";
foreach ($vue as $value) {
    echo '<tr><td>';
    foreach ($value as $name) {

        foreach ($name as $others) {
            echo '<br>';
            print_r($others);
        }

    }
    echo '</td></tr>';

}
echo "</table>";
echo "<a href='..'>Retour à l'accueil</a>";