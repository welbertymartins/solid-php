<?php

declare(strict_types=1);

namespace Model\Geometry;

$rectangle = new Rectangle();
$rectangle->setWidth(10);
$rectangle->setHeight(6);
echo $rectangle->calculateArea(); // 60

$square = new Square();
$square->setWidth(10);
$square->setHeight(6);
echo $square->calculateArea(); // 36