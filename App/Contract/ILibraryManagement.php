<?php

namespace App\Contract;

use App\Entity\Book;
use App\Entity\Member;

interface ILibraryManagement
{
    public function initLibrary(string $libraryName);
    public function addMember(Member $member);
    public function addBook(Book $book);
    public function lendingBook(Member $member, Book $book);
    public function returnTheBook(Member $member, Book $book);
    public function listOfLoan(): array;
}
