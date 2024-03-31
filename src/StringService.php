<?php

declare(strict_types=1);

namespace JuliaZhigareva\OtusComposerPackage;

class StringService
{
    public function getLength(string $string): int
    {
        return strlen($string);
    }

}