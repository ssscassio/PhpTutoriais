<?php

header('Content-Type: text/html; charset= utf-8');

date_default_timezone_set('America/Sao_Paulo');

$input = '12. 30. 2014';
$data = \DateTime::createFromFormat ('m. d. Y', $input);
$final = clone $data;

$final->add(new \DateInterval('P4W'));

$diff = $final ->diff($data);

print('Diff: ' . $diff->format('%d dias e %m meses, total: %a'));echo '<br>';echo '<br>';
echo 'Final: ' . $final->format('d/m/Y '); echo '<br>';
echo 'Data no Padrão BR:' . $data->format('d/m/Y');

