<?php

namespace App\Model;

class Task
{
    private string $title;
    private bool $completed;

    public function __construct(
        string $title,
)
    {
        $this->title = $title;
        $this->completed = false;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function changeStatus(): void
    {
        $status = $this->completed;

        $this->completed = !($status);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStatus(): bool
    {
        return $this->completed;
    }

}


?>
