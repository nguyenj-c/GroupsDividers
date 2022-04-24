<?php

final class Etudiant
{
    private $groupe;

    public function traitementFichier(){   // fonction qui sert à remplacer les points virgules par des espaces pour le fichier csv lors de la première utilisation voir Liste-Etudiants...Original.csv
        $str = file_get_contents("Liste-Etudiants-LPDevWeb_2021-2022.csv");
        $file = str_replace(";"," ",$str);
        $file1 = fopen("Liste-Etudiants-LPDevWeb_2021-2022.csv", "w+");
        fputs($file1, $file);
        fclose($file1);
    }
    public function affichageFichier() //fonction qui affiche la liste des étudiants en LP
    {
        $this->traitementFichier();
        if (($handle = fopen("Liste-Etudiants-LPDevWeb_2021-2022.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $tableau[] = $data;
            }
            $this->groupe = $tableau;
        }
        fclose($handle);
        return $this->groupe;
    }
    public function triParGroupe()
    {
        $nbEtudiants = $_POST['groupe'];
        $this->traitementFichier();
        if (($handle = fopen("Liste-Etudiants-LPDevWeb_2021-2022.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $tableau[] = $data;
                $tableauCouper = array_slice($tableau,3);
                shuffle($tableauCouper);
            }
            $this->groupe = array_chunk($tableauCouper,$nbEtudiants,true);

        }
        fclose($handle);
        return $this->groupe;
    }
}