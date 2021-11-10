<?php

declare(strict_types=1);

namespace Model\Geometry;

class Square implements FlatFigure
{   
    protected float $side;

    public function setSide(float $side)
    {
        $this->side = $side;
    }

    public function calculateArea(): float
    {
        return $this->side * $this->side;
    }
}
