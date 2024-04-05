<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Adrian Oliveira',
    new \DateTimeImmutable('2001-02-22')
);

echo $student->age();
