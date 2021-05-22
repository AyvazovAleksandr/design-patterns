<?php

namespace LogisticExample;

class Truck implements Transport
{
    public function load(): void
    {
        echo "The truck is loading...\n";
    }

    public function delivery(string $cargo): void
    {
        echo "The truck delivering $cargo! \n";
    }

    public function unload(): void
    {
        echo "The truck unloaded! \n";
    }
}