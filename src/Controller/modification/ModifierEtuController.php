<?php

namespace Quizz\Controller\modification;

use Quizz\Service\TwigService;

class ModifierEtuController
{
    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }

    public function outputEvent()
    {
        $twig = TwigService::getEnvironment();
        echo $twig->render("Modifier/modifier.html.twig");
    }
}