<?php

declare(strict_types=1);

namespace Model\Geometry;

class Square extends Rectangle
{
    public function setWidth(float $width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight(float $height)
    {   
        $this->height = $height;
        $this->width = $height;
    }
}
