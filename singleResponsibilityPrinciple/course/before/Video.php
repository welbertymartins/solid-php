<?php

declare(strict_types=1);

namespace Model\Course;

class Video
{
    protected bool $visualized;
    protected string $name;
    protected \DateInterval $duration;

    public function __construct(string $name) 
    {   
        $this->name = $name;
        $this->visualized = false;
        $this->duration = \DateInterval::createFromDateString("0");
    }

    public function watch(): void
    {
        $this->visualized = true;
    }

    public function getName(): string
    {
        return $this->name;
    }
}