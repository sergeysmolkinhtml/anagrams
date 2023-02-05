<?php

declare(strict_types=1);

namespace App;

class Anagram
{

    private string $sourceString;

    public function __construct($anyString)
    {
        $this->sourceString = $anyString;
    }

    public function setSourceString(string $anyString): void
    {
        $this->sourceString = $anyString;
    }

    public function getAnagram(): string
    {
        $anagram = '';
        $substringBlock = explode(" ", $this->sourceString);

        for ($blocksNumber = 0; count($substringBlock) > $blocksNumber; $blocksNumber++) {
            $substringBlockLength = strlen($substringBlock[$blocksNumber]) - 1;
            $converseBlock = strrev($substringBlock[$blocksNumber]);
            $zsuv = 0;
            for ($j = 0; $j <= $substringBlockLength; $j++) {
                if (is_numeric($substringBlock[$blocksNumber][$j])) {
                    $anagram .= $substringBlock[$blocksNumber][$j];
                }
                if (!is_numeric($substringBlock[$blocksNumber][$j])) {
                    if (!is_numeric($converseBlock[$j + $zsuv])) {
                        $anagram .= $converseBlock[$j + $zsuv];
                    }
                    if (is_numeric($converseBlock[$j + $zsuv])) {
                        for ($i = $j + $zsuv; $i <= $substringBlockLength; $i++) {
                            $zsuv = $i - $j;
                            if (!is_numeric($converseBlock[$i])) {
                                break;
                            }
                        }
                        $anagram .= $converseBlock[$i];
                    }
                    if ($converseBlock[$j + $zsuv] == '') {
                        $anagram .= $converseBlock[$j];
                    }
                }
            }
            $anagram .= ' ';
        }
        return substr($anagram, 0, strlen($anagram) - 1);
    }
}