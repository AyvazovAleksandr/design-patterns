<?php
namespace WorkshopExample;

require_once('vendor/autoload.php');

function clientCode(AbstractFactory $factory)
{
    $box = $factory->createBox();
    $chair = $factory->createChair();

    echo $box->createGlassBox() . "\n";
    echo $chair->createGlassChair() . "\n";
}

echo "<p> Пример реализации абстрактной фабрики на PHP </p>";
echo "<p><a href='https://github.com/AyvazovAleksandr/design-patterns/tree/main/abstract-factory'>https://github.com/AyvazovAleksandr/design-patterns/tree/main/abstract-factory</a></p>";
echo "<p>Проверяем создание предметров на Восточной фабрике:</p>";
clientCode(new EastFactory());
echo "<br>";
echo "<p>Проверяем создание предметров на Западной фабрике:</p>";
clientCode(new WestFactory());