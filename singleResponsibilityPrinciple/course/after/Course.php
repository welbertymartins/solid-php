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

    public function getName(): string
    {
        return $this->name;
    }

    public function addFeedback(Feedback $feedback): void
    {   
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }
}
