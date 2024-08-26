<?php

namespace App\Entity;

class LibraryDeposits
{
    private array $listOfLoan = [];
    private Member $targetMember;
    private Book $targetBook;

    public function lendingBooks(Member $member, Book $book): void
    {
        $loanDate = date('Y-m-d H:i:s');
        $this->listOfLoan[] = $this->buildLoan($member, $book, $loanDate);
    }

    public function returnTheBook(Member $member, Book $book): void
    {
        $this->targetMember = $member;
        $this->targetBook = $book;
        $this->listOfLoan = array_map([$this, 'updateLoan'], $this->listOfLoan);
    }

    public function listOfLoan(): array
    {
        return $this->listOfLoan;
    }

    private function buildLoan(Member $member, Book $book, string $loanDate = '', string $returnDate = ''): Loan
    {
        return new Loan($member, $book, $loanDate, $returnDate);
    }

    private function updateLoan(Loan $loan): Loan
    {
        if (
            $loan->getMember()->getMembershipCode() === $this->targetMember->getMembershipCode() &&
            $loan->getBook()->getCode() === $this->targetBook->getCode()
        ) {
            $returnDate = date('Y-m-d H:i:s');
            return $this->buildLoan($this->targetMember, $this->targetBook, $loan->getLoanDate(), $returnDate);
        } else {
            return $loan;
        }
    }
}
