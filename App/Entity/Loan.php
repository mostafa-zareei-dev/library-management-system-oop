<?php

namespace App\Entity;


class Loan
{
    const LOANED = 1;
    const RETURNED = 2;

    private string $loanDate = '';
    private string $returnDate = '';
    private Member $member;
    private Book $book;
    private int $status;

    public function __construct(Member $member, Book $book, string $loanDate, string $returnDate)
    {
        $this->member = $member;
        $this->book = $book;
        $this->loanDate = $loanDate;
        $this->returnDate = $returnDate;
        $this->status = self::LOANED;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function getMember(): Member
    {
        return $this->member;
    }

    public function getLoanDate(): string
    {
        return $this->loanDate;
    }
}
