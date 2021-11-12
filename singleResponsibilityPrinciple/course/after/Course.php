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
    }

    public function addFeedback(FeedbackInterface $feedback)
    {   
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(VideoInterface $video) 
    {
        $this->videos[] = $video;
    }

}
