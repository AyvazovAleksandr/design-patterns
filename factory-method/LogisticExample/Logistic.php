<?php

namespace LogisticExample;

abstract class Logistic
{
    abstract public function getTransport(): Transport;

    public function deliveryCargo(string $cargoName): void
    {
        $transport = $this->getTransport();

        $transport->load();
        $transport->delivery($cargoName);
        $transport->unload();

    }
}