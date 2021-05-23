<?php

namespace WorkshopExample;

class BoxType2 implements AbstractBox
{
    public function createGlassBox(): string
    {
        return "Glass box type 2";
    }

    public function createMetalBox(): string
    {
        return "Metal box type 2";
    }
}