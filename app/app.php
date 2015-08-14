<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Home page twig link
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    //Results page twig link
    $app->post("/results", function() use ($app) {
        $new_RepeatCounter = new RepeatCounter;
        $results = $new_RepeatCounter->countRepeats($_POST['word'], $_POST['string']);
        return $app['twig']->render('results.html.twig', array('result' => $results));
    });

    return $app;
?>
