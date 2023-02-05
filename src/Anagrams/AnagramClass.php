<?php

declare(strict_types=1);

namespace MyClasses;



class AnagramClass implements AnagramInterface
{

    private string $inputString;

    public function __construct($string)
    {
        $this->inputString = $string; // string =  переданный параметр string
    }

    public function setInputString(string $string): void // сеттер для $string
    {
        $this->inputString = $string;
    }

    public function getInputString(){
        return $this->inputString;
    }

    public function getAnagram($inputString): string
    {
        $result = [];
        foreach (explode(' ', $inputString) as $index => $word) {
            $result[$index] = '';
            $count = preg_match_all('/(\pL)|(.)/u', $word, $m, PREG_SET_ORDER);
            for ($i = 0, $j = $count; $i < $count; ++$i) {
                if (!$m[$i][1]) {
                    $result[$index] .= $m[$i][2];
                } else {
                    while (--$j >= 0) {
                        if ($m[$j][1]) {
                            $result[$index] .= $m[$j][1];
                            break;
                        }
                    }
                }
            }
        }
        return implode(' ', $result);
    }

}

