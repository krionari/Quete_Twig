<?php

$products = ['Picsou', 'Donald', 'Riri', 'Fifi', 'LouLou'];

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [ 'products' => $products]);