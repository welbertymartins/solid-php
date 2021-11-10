<?php

declare(strict_types=1);

namespace Model\Geometry;

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);
echo $rectangle->calculateArea(); // 24

$rectangle = new Square();
$rectangle->setSide(4.89);
echo $rectangle->calculateArea(); // ~24