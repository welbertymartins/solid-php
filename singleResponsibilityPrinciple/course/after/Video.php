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
        $this->visualized = false;
        $this->name = $name;
        $this->duration = \DateInterval::createFromDateString("2 minutes");
    }

    public function watch(): void
    {
        $this->visualized = true;
    }
}