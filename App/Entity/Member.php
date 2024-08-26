<?php

namespace App\Entity;

class Member
{
    private string $firstName;
    private string $lastName;
    private int $membershipCode;
    private string $nationalCode;
    private string $address;
    private string $phoneNumber;

    public function __construct(string $firstName, string $lastName, string $nationalCode, string $address, string $phoneNumber)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->membershipCode = rand(1000, 9999);
        $this->nationalCode = $nationalCode;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
    }

    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function getNationalCode(): string
    {
        return $this->nationalCode;
    }

    public function getMembershipCode(): int
    {
        return $this->membershipCode;
    }
}
