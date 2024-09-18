<?php
class Tafelkaart
{
    public function generate($n)
    {
        $table = [];
        for ($i = 1; $i <= $n; $i++) {
            $row = [];
            for ($j = 1; $j <= $n; $j++) {
                $row[] = $i * $j;
            }
            $table[] = $row;
        }
        return $table;
    }
}

$tafel = new Tafelkaart();
$n = 0; // vul hier een waarde in
echo "Tafelkaart van 1 tot $n:\n";
$table = $tafel->generate($n);
foreach ($table as $row) {
    echo implode("\t", $row) . "\n";
}