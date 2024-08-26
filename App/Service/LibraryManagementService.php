<?php

namespace App\Service;

use App\Contract\IBookManagement;
use App\Contract\IDepositManagement;
use App\Contract\ILibraryManagement;
use App\Contract\IMemberManagement;
use App\Entity\Book;
use App\Entity\Library;
use App\Entity\Member;

class LibraryManagementService implements ILibraryManagement
{
    private Library $library;
    private IBookManagement $bookManagementService;
    private IDepositManagement $depositManagementService;
    private IMemberManagement $memberManagementService;

    public function __construct(
        IBookManagement $bookManagementService,
        IDepositManagement $depositManagementService,
        IMemberManagement $memberManagementService
    ) {
        $this->bookManagementService = $bookManagementService;
        $this->depositManagementService = $depositManagementService;
        $this->memberManagementService = $memberManagementService;
    }

    public function initLibrary(string $libraryName = '')
    {
        $this->library = new Library();
        $this->library->setName($libraryName);

        $this->bookManagementService->setLibrary($this->library);
        $this->memberManagementService->setLibrary($this->library);
        $this->depositManagementService->setLibrary($this->library);
        $this->depositManagementService->setLibraryDeposits();
    }

    public function addMember(Member $member)
    {
        $this->memberManagementService->add($member);
    }

    public function addBook(Book $book)
    {
        $this->bookManagementService->add($book, $this->library);
    }

    public function lendingBook(Member $member, Book $book)
    {
        $this->depositManagementService->lendingBooks($member, $book);
    }

    public function returnTheBook(Member $member, Book $book)
    {
        $this->depositManagementService->returnTheBook($member, $book);
    }

    public function listOfLoan(): array
    {
        return $this->depositManagementService->listOfLoan();
    }
}
