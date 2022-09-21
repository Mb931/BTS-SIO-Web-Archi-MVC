<?php

namespace Quizz\Model;

use Quizz\Core\Service\DatabaseService;
use Quizz\Entity\Etudiant;

class InscritpionModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = DatabaseService::getConnect();
    }

    /**
     * @return array


    public function getFechAll()
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire');
        $requete->execute();
        $tabQuestionnaire = [];

        foreach ($requete->fetchAll() as $value)
        {
            $questionnaire = new Questionnaire();
            $questionnaire->setIdQuestionnaire($value["idQuestionnaire"]);
            $questionnaire->setLibelleQuestionnaire($value["libelleQuestionnaire"]);
            $tabQuestionnaire[] = $questionnaire;
        }

        return $tabQuestionnaire;
    }
     */
    /**
     * @param int $id
     * @return Questionnaire

    public function getFechId(int $id)
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire where idQuestionnaire = ' . $id);
        $requete->execute();
        $result = $requete->fetch();

        $questionnaire = new Questionnaire();
        $questionnaire->setIdQuestionnaire($result["idQuestionnaire"]);
        $questionnaire->setLibelleQuestionnaire($result["libelleQuestionnaire"]);

        return  $questionnaire;
    }

}
*/
      /**
     * @return array

    public function getFechAll()
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire');
        $requete->execute();
        $tabQuestionnaire = [];

        foreach ($requete->fetchAll() as $value)
        {
            $questionnaire = new Questionnaire();
            $questionnaire->setIdQuestionnaire($value["idQuestionnaire"]);
            $questionnaire->setLibelleQuestionnaire($value["libelleQuestionnaire"]);
            $tabQuestionnaire[] = $questionnaire;
        }

        return $tabQuestionnaire;
    }
*/

    /**
     * @param int $id
     * @return Questionnaire

    public function getFechId(int $id)
    {
        $requete = $this->bdd->prepare('SELECT * FROM questionnaire where idQuestionnaire = ' . $id);
        $requete->execute();
        $result = $requete->fetch();

        $questionnaire = new Questionnaire();
        $questionnaire->setIdQuestionnaire($result["idQuestionnaire"]);
        $questionnaire->setLibelleQuestionnaire($result["libelleQuestionnaire"]);

        return  $questionnaire;
    }
*/


    public function insertEtudiant(Etudiant $etu)
    {

        $requete = $this->bdd->prepare("INSERT INTO etudiants (prenom,nom,login,email,motDePasse) VALUES('{$etu->getPrenom()}','{$etu->getNom()}','{$etu->getEmail()}','{$etu->getLogin()}','{$etu->getMotDePasse()}')");
        $requete->execute();
        }
    }