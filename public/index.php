<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use Quizz\Core\Controller\FastRouteCore;

// Gestion des fichiers environnement
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Couche Controller
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
    $route->addRoute('GET', '/', 'Quizz\Controller\HomeController');
    $route->addRoute('GET', '/lister', 'Quizz\Controller\Questionnaire\ListController');
    $route->addRoute('GET', '/detail/{id:\d+}', 'Quizz\Controller\Questionnaire\ViewController');
    $route->addRoute('GET', '/helloworld', 'Quizz\Controller\Helloworld\HelloworldController');
    $route->addRoute(['GET','POST'],'/inscription', 'Quizz\Controller\Inscription\InscriptionController');
    $route->addRoute('GET','/etudiant', 'Quizz\Controller\Etudiant\ListeEtudiantController');
    $route->addRoute('GET','/modification', 'Quizz\Controller\modification\ModifierEtuController');

});
// Dispatcher -> Couche view
echo FastRouteCore::getDispatcher($dispatcher);

