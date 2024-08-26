<?php

namespace App\Entity;

class Book
{
    private int $code;
    private string $title;
    private string $author;
    private string $yearOfRelease;

    public function __construct(string $title, string $author, string $yearOfRelease)
    {
        $this->code = rand(1000, 9999);
        $this->title = $title;
        $this->author = $author;
        $this->yearOfRelease = $yearOfRelease;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getYearOfRelease(): string
    {
        return $this->yearOfRelease;
    }
}
