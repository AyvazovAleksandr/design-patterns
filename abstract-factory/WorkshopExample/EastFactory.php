<?php

namespace WorkshopExample;

class EastFactory implements AbstractFactory
{
    public function createBox(): AbstractBox
    {
        return new BoxType1();
    }

    public function createChair(): AbstractChair
    {
        return new ChairType1();
    }
}