<?php

declare(strict_types=1);

namespace Model\Course;

class Feedback
{
    protected int $rating;
    protected string $testimony;

    public function __construct(int $rating, string $testimony)
    {   
        if( $rating < 1 || $rating > 10 ){
            throw new \InvalidArgumentException("Rating must be between 1 and 10");
        }

        if($rating < 9 && empty($testimony)) {
            throw new \DomainException("Mandatory testimony if rating is less than 9");
        }

        $this->rating = $rating;
        $this->testimony = $testimony;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function getTestimony(): string
    {
        return $this->testimony;
    }
}
