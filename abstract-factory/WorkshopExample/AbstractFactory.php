<?php

namespace WorkshopExample;

interface AbstractFactory
{
    public function createBox(): AbstractBox;

    public function createChair(): AbstractChair;
}

