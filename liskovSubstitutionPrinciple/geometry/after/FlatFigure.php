<?php

declare(strict_types=1);

namespace Model\Geometry;

interface FlatFigure 
{
    public function calculateArea(): float;
}
