<?php

declare(strict_types=1);

namespace Model\Course;

class Feedback implements FeedbackInterface
{
    private int $rating;
    private string $testimony;

    public function __construct(int $rating, string $testimony)
    {   
        if($rating < 9 && empty($testimony)) {
            throw new \DomainException("Mandatory testimony if rating is less than 9");
        }

        $this->rating = $rating;
        $this->testimony = $testimony;
    }
}