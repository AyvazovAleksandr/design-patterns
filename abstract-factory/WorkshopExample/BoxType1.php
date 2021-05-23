<?php

namespace WorkshopExample;

class BoxType1 implements AbstractBox
{
    public function createGlassBox(): string
    {
        return "Glass box type 1";
    }

    public function createMetalBox(): string
    {
        return "Metal box type 1";
    }
}