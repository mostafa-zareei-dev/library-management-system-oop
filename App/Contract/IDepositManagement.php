<?php

namespace App\Contract;

use App\Entity\Book;
use App\Entity\LibraryDeposits;
use App\Entity\Member;

interface IDepositManagement extends ILibrary
{
    public function setLibraryDeposits();
    public function lendingBooks(Member $member, Book $book);
    public function returnTheBook(Member $member, Book $book);
    public function listOfLoan(): array;
}
