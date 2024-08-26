<?php

namespace App\Contract;

use App\Contract\ILibrary;
use App\Entity\Member;

interface IMemberManagement extends ILibrary
{
    public function buildMember(string $firstName, string $lastName, string $nationalCode, string $address, string $phoneNumber): Member;
    public function add(Member $member);
}
