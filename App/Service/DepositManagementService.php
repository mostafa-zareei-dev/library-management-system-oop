<?php

namespace App\Service;

use App\Contract\IDepositManagement;
use App\Entity\Book;
use App\Entity\Library;
use App\Entity\LibraryDeposits;
use App\Entity\Member;

class DepositManagementService implements IDepositManagement
{
    private Library $library;

    public function setLibrary(Library $library)
    {
        $this->library = $library;
    }

    public function setLibraryDeposits()
    {
        $libraryDeposits = new LibraryDeposits();
        $this->library->setLibraryDeposits($libraryDeposits);
    }

    public function lendingBooks(Member $member, Book $book)
    {
        $this->library->getLibraryDeposits()->lendingBooks($member, $book);
    }

    public function returnTheBook(Member $member, Book $book)
    {
        $this->library->getLibraryDeposits()->returnTheBook($member, $book);
    }

    public function listOfLoan(): array
    {
        return $this->library->getLibraryDeposits()->listOfLoan();
    }
}
