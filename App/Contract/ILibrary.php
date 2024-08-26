<?php

namespace App\Contract;

use App\Entity\Library;

interface ILibrary
{
    public function setLibrary(Library $library);
}
