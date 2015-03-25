<?php
date_default_timezone_set("America/Sao_Paulo");
$raw = '22. 11. 1968';
$start = DateTime::createFromFormat('d. m. Y', $raw);

echo "Start date: " . $start->format('Y-m-d') . "\n";

$end = clone $start;
$end->add(new DateInterval('P1M6D'));

$diff = $end->diff($start);
echo "\n Diferença: " . $diff->format('%m month, %d days, (total: %a days') . "\n";

if ($start < $end){
	echo "Start is before end";
}