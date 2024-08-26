<?php

namespace App\Entity;

class Library
{
    private string $name = '';
    private array $listOfBooks = [];
    private array $listOfMembers = [];
    private LibraryDeposits $LibraryDeposits;

    public function setLibraryDeposits(LibraryDeposits $LibraryDeposits): void
    {
        $this->LibraryDeposits = $LibraryDeposits;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(string $name): string
    {
        return $this->name;
    }

    public function getLibraryDeposits(): LibraryDeposits
    {
        return $this->LibraryDeposits;
    }

    public function addMember(Member $member)
    {
        $this->listOfMembers[] = $member;
    }

    public function addBook(Book $book)
    {
        $this->listOfBooks[] = $book;
    }
}
