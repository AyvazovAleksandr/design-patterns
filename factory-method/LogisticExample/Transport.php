<?php
namespace LogisticExample;

interface Transport
{
    public function load(): void;
    public function delivery(string $cargo): void;
    public function unload(): void;
}