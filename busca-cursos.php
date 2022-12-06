<?php

// Com esse comando nós importamos todos os pacotes em uma unica linha, utilizando o autoload
require 'vendor/autoload.php';

use Jonas\BuscaCursosAlura\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->busca('/cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso. PHP_EOL;
}