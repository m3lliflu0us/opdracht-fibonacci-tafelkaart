<?php
class Fibonacci
{
    public function generate($n)
    {
        $fib_sequence = [];
        $a = 1;
        $b = 2;
        for ($i = 0; $i < $n; $i++) {
            $fib_sequence[] = $a;
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
        return $fib_sequence;
    }
}

$fib = new Fibonacci();
$n = 0; // vul hier het aantal stappen in
echo "Fibonacci-reeks tot $n stappen: " . implode(", ", $fib->generate($n)) . "\n";
