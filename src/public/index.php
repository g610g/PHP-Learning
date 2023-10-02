<?php

declare(strict_types=1);


require __DIR__ . "/../vendor/autoload.php";
use App\TestController;
use Ramsey\Uuid\UuidFactory;


// $testController = new TestController();

$id = new UuidFactory();

echo $id->uuid4();



