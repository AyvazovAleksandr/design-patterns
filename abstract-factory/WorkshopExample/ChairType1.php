<?php

namespace WorkshopExample;

class ChairType1 implements AbstractChair
{
    public function createGlassChair(): string
    {
        return "Glass chair type 1";
    }

    public function createMetalChair(): string
    {
        return "Metal chair type 1";
    }
}