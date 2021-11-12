<?php

declare(strict_types=1);

namespace Model\Geometry;

class Square implements FlatFigure
{   
    protected float $sideSize;

    public function setSide(float $sideSize)
    {
        $this->sideSize = $sideSize;
    }

    public function calculateArea(): float
    {
        return $this->sideSize * $this->sideSize;
    }
}
