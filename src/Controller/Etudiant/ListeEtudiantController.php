<?php

namespace Quizz\Controller\Etudiant;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Entity\Etudiant;
use Quizz\Model\InscritpionModel;
use Quizz\Model\listeEtudiantModel;
use Quizz\Service\TwigService;

class ListeEtudiantController implements ControllerInterface
{

    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }
    public function outputEvent()
    {
        // TODO: Implement outputEvent() method.
        $lesEtudiants= new listeEtudiantModel();
        return TwigService::getEnvironment()->render("affichage/affichage.html.twig",["etudiants"=>$lesEtudiants->getListeEtudiant()]);
    }
}