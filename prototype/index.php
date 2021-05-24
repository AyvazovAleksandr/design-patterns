<?php
namespace BlogPageExample;

require_once('vendor/autoload.php');


function clientCode()
{
    $author = new Author("Лука Солнцев");
    $page = new Page("Совет дня!", "Сохраняйте спокойствие и продолжайте.", $author);

    $page->addComment("Хороший совет, спасибо!");

    $draft = clone $page;
    echo "Дамп клона. Обратите внимание, что автор теперь ссылается на два объекта.\n\n";
    dd($draft);
}

echo "<p> Пример реализации паттерна Прототип на PHP </p>";
echo "<p><a href='https://github.com/AyvazovAleksandr/design-patterns/tree/main/prototype'>https://github.com/AyvazovAleksandr/design-patterns/tree/main/prototype</a></p>";
clientCode();