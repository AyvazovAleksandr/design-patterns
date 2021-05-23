<?php

namespace WorkshopExample;

class WestFactory implements AbstractFactory
{
    public function createBox(): AbstractBox
    {
        return new BoxType2();
    }

    public function createChair(): AbstractChair
    {
        return new ChairType2();
    }
}