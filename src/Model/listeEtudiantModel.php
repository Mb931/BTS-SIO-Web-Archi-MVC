<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;
use Quizz\Entity\Etudiant;

class listeEtudiantModel
{
    private $bdd;

     public function __construct()
     {
         $this->bdd = DatabaseService::getConnect();
     }

    public function getListeEtudiant()
    {
        $requete = $this->bdd->prepare("SELECT * FROM etudiants");
        $requete->execute();

        foreach ($requete->fetchAll() as $value){
            $etudiant = new Etudiant();
            $etudiant->setPrenom($value['prenom']);
            $etudiant->setNom($value['nom']);
            $etudiant->setIdEtudiant($value['idEtudiant']);
            $etudiant->setLogin($value['login']);
            $etudiant->setMotDePasse($value['motDePasse']);
            $etudiant->setEmail($value['email']);
            $tabEtudiant[]=$etudiant;
        }
        return $tabEtudiant;
    }


}