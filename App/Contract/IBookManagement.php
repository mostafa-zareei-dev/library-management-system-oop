<?php

namespace App\Contract;

use App\Entity\Book;
use App\Contract\ILibrary;

interface IBookManagement extends ILibrary
{
    public function buildBook(string $title, string $author, string $yearOfRelease): Book;
    public function add(Book $book);
}
