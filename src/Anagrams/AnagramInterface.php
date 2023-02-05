<?php

declare(strict_types=1);

namespace MyClasses;

interface AnagramInterface
{
    /**
     * @param string $string
     * @return string
     */
    public function getAnagram(string $string): string;
}
