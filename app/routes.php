<?php

use Symfony\Component\HttpFoundation\Request;
use MicroStore\Domain\Comment;
use MicroStore\Domain\Article;
use MicroStore\Domain\User;
use MicroStore\Form\Type\CommentType;
use MicroStore\Form\Type\ArticleType;
use MicroStore\Form\Type\UserType;
use MicroStore\DAO\UserDAO;

// Home page
$app->get('/', function () use ($app) {
    return $app['twig']->render('layout.html.twig');
})->bind('home');

// Login form
$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('login.html.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');

// Register form
$app->get('/register', function(Request $request) use ($app) {
    return $app['twig']->render('register.html.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('register');

// Register validation
$app->post('/register_check', function(Request $request) use ($app) {
  
    $data = $request->request->all();

    $user = new User();
    $user->setUsername($data["_username"]);
    $salt = substr(md5(time()), 0, 23);
    $user->setSalt($salt);
    $plainPassword = $data["_password"];
    $encoder = $app['security.encoder.digest'];
    $password = $encoder->encodePassword($plainPassword, $user->getSalt());
    $user->setPassword($password);
    $user->setRole("ROLE_USER");
    $user->setMail($data["_mail"]);
    $userDao = new UserDAO($app['db']);
    $userDao->save($user);

    return $app->redirect('/login');
})->bind('register_check');
