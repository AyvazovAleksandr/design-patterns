<?php
namespace SqlBuilderExample;
require_once('vendor/autoload.php');

function clientCode(SQLQueryBuilder $queryBuilder)
{

    $querySelect = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

    echo "<p>Select:</p><p><code>$querySelect</code></p>";

    $queryUpdate = $queryBuilder
        ->update("users", ["name" => "admin", "email" =>  "admin@mail.ru", "password" =>  "123456"])
        ->where("email", "admin@site.ru", "=")
        ->getSQL();

    echo "<p>Update:</p><p><p><code>$queryUpdate</code></p>";

    $queryDelete = $queryBuilder
        ->delete("users")
        ->where("email", "admin@site.ru", "=")
        ->getSQL();

    echo "<p>Delete:</p><p><p><code>$queryDelete</code></p>";

}

echo "<p>Пример реализации паттерна Строитель на PHP</p>";
echo "<p><a href='https://github.com/AyvazovAleksandr/design-patterns/tree/main/builder'>https://github.com/AyvazovAleksandr/design-patterns/tree/main/builder</a></p>";

echo "<p>Проверяем наш сгенерированный SQL запрос к строителю:</p>";
clientCode(new MysqlQuery());