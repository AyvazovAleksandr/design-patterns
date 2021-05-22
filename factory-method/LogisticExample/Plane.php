<?php

namespace LogisticExample;

class Plane implements Transport
{
    public function load(): void
    {
        echo "The plane is loading...\n";
    }

    public function delivery(string $cargo): void
    {
        echo "The plane delivering $cargo! \n";
    }

    public function unload(): void
    {
        echo "The plane unloaded! \n";
    }
}