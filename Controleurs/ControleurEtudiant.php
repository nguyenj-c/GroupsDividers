<?php

final class ControleurEtudiant
{
    public function defautAction()
    {
        Vue::montrer('etudiant/voir'); //ici pas besoin d'appel à de fonction particulière
    }

    public function tableauAction()
    {
        $O_etudiant1 =  new Etudiant();
        Vue::montrer('etudiant/tableauClasse', array('AffichageClasse' =>  $O_etudiant1->affichageFichier()));
    }
    public function groupeAction()
    {
        $O_etudiant2 =  new Etudiant();
        Vue::montrer('etudiant/tableauGroupe', array('GroupeEtu' =>  $O_etudiant2->triParGroupe()));
    }
}