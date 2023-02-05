<?php
declare(strict_types=1);

require 'vendor/autoload.php';

$string = 'a1bcd efg!h'; //a1bcd efg!h
echo 'INPUT: '   . ($string) . "\r\n";

$anagram = new MyClasses\AnagramClass($string);
echo 'OUTPUT : ' . $anagram->getAnagram($string);