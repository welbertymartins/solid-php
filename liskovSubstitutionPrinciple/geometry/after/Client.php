<?php

declare(strict_types=1);

namespace Model\Geometry;

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);
echo $rectangle->calculateArea(); // 24

$square = new Square();
$square->setSide(4.89);
echo $square->calculateArea(); // ~24