<?php

namespace Quizz\Controller\Helloworld;

use Quizz\Core\Controller\ControllerInterface;
use Quizz\Service\TwigService;

class HelloworldController implements ControllerInterface
{

    public function inputRequest(array $tabInput)
    {
        // TODO: Implement inputRequest() method.
    }

    public function outputEvent()
    {
        $twig = TwigService::getEnvironment();
        echo $twig->render("helloworld/helloworld.html.twig");

    }
}