<?php

//REQUEST-> FUNCIONA CON GET Y POST SI NO SABEMOS CON QUE NOS LO VAN A MANDAR
$sensor = $_REQUEST["sensor"];
$valor = $_REQUEST["valor"];
echo "El valor del $sensor es $valor";