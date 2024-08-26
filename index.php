<?php

declare(strict_types=1);

date_default_timezone_set('Asia/Tehran');

include "autoload.php";

use App\Service\BookManagementService;
use App\Service\DepositManagementService;
use App\Service\LibraryManagementService;
use App\Service\MemberManagementService;

$bookManagementService = new BookManagementService();
$depositeManagementService = new DepositManagementService();
$memberManagementService = new MemberManagementService();
$libraryManagementService = new LibraryManagementService(
    $bookManagementService,
    $depositeManagementService,
    $memberManagementService
);

$libraryManagementService->initLibrary('My Library');

$book = $bookManagementService->buildBook('clean code', 'bob', '2006');

$member = $memberManagementService->buildMember(
    'Mostafa',
    'Zareei',
    '0123456789',
    'tehran-pasdaran-pellak12',
    '09123456789',
);

$libraryManagementService->addBook($book);
$libraryManagementService->addMember($member);
$libraryManagementService->lendingBook($member, $book);

echo "<pre>";
var_dump($libraryManagementService->listOfLoan());
echo "</pre>";
