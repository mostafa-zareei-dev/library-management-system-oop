<?php

namespace App\Service;

use App\Contract\IBookManagement;
use App\Entity\Book;
use App\Entity\Library;

class BookManagementService implements IBookManagement
{
    private Library $library;

    public function setLibrary(Library $library)
    {
        $this->library = $library;
    }

    public function buildBook(string $title, string $author, string $yearOfRelease): Book
    {
        return new Book($title, $author, $yearOfRelease);
    }

    public function add(Book $book)
    {
        $this->library->addBook($book);
    }
}
