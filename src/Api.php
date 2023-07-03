<?php 

declare(strict_types=1);

namespace Tsulem\IimTd1;

class Api
{
    public function getRandomNumber() : int
    {
        return rand(0, 100);
    }
}