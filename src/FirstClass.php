<?php
declare(strict_types=1);

namespace YourMonorepo\FirstPackage;

require "vendor/autoload.php";

use Carbon\Carbon;

final class FirstClass
{
    public function test()
    {
        $p = new \JsonCollectionParser\Parser();
        echo Carbon::today();
    }
}


(new FirstClass())->test();