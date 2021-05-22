<?php
namespace LogisticExample;

require_once('vendor/autoload.php');


function clientCode(Logistic $logistic, string $cargo): void
{
    $logistic->deliveryCargo($cargo);
}
echo "<p> Пример реализации фабричного метода на PHP </p>";
echo "<p><a href='https://github.com/AyvazovAleksandr/design-patterns/tree/main/factory-method'>https://github.com/AyvazovAleksandr/design-patterns/tree/main/factory-method</a></p>";
clientCode(new AirLogistic, 'Cookies');
echo "<br>";
clientCode(new RoadLogistic(), 'Tanks');