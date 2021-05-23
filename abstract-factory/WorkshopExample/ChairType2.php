<?php

namespace WorkshopExample;

class ChairType2 implements AbstractChair
{
    public function createGlassChair(): string
    {
        return "Glass chair type 2";
    }

    public function createMetalChair(): string
    {
        return "Metal chair type 2";
    }
}