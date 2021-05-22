<?php
namespace LogisticExample;

require_once('../vendor/autoload.php');

function clientCode(Logistic $logistic, string $cargo): void
{
    $logistic->deliveryCargo($cargo);
}

clientCode(new AirLogistic, 'Cookies');
echo PHP_EOL;
clientCode(new RoadLogistic(), 'Logistic');