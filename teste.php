<?php

require 'ResultsFound.php';

$texto = 'pedro321cardoso@teste.com.br';
$procurar = 'pedro';

$resultsFound = new ResultsFound();
echo $resultsFound->markText($texto, $procurar);