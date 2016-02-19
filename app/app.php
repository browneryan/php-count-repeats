<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/results', function() use ($app) {
        $new_search = new RepeatCounter;
        $result = $new_search->countRepeats($_GET['user_sentence'], $_GET['user_word']);
        return $app['twig']->render('results.html.twig', array('results' => $result));
    });

    return $app;
?>
