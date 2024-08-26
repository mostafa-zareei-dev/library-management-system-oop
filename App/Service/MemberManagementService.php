<?php

namespace App\Service;

use App\Contract\IMemberManagement;
use App\Entity\Library;
use App\Entity\Member;

class MemberManagementService implements IMemberManagement
{
    private Library $library;

    public function setLibrary(Library $library)
    {
        $this->library = $library;
    }

    public function buildMember(string $firstName, string $lastName, string $nationalCode, string $address, string $phoneNumber): Member
    {
        return new Member($firstName, $lastName, $nationalCode, $address, $phoneNumber);
    }

    public function add(Member $member)
    {
        $this->library->addMember($member);
    }
}
