<?php

namespace Quizz\Controller\Inscription;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Entity\Etudiant;
use Quizz\Model\InscritpionModel;
use Quizz\Service\TwigService;

class InscriptionController implements ControllerInterface
{

    private $post;

    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
        if(!empty($tabInput["POST"]))
        {
            $this->post =$tabInput["POST"];
        }
    }

    public function outputEvent()
    {
        $twig = TwigService::getEnvironment();
        echo $twig->render("inscription/inscription.html.twig");


    }
}