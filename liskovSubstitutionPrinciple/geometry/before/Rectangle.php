<?php

declare(strict_types=1);

namespace Model\Geometry;

class Rectangle
{
    protected float $height;
    protected float $width;

    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}
