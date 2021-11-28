<?php

declare(strict_types=1);

namespace Model\Course;

class Course 
{
    private string $name;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = array();
        $this->feedbacks = array();
    }

    public function addFeedback(int $rating, ?string $testimony = null): void
    {   
        if($rating < 9 && empty($testimony)) {
            throw new \DomainException("Mandatory testimony if rating is less than 9");
        }
        
        $this->feedbacks[] = [$rating, $testimony];
    }

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
