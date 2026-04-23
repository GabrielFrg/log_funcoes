<?php

require_once "biblioteca.php";

use function matematica\soma;
use function texto\Concatenar;
use function logica\verificaidade;
use function logica\verificarexercito;

echo "status: ", verificarexercito ("masculino",19);

?>