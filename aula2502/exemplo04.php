<?php
    date_default_timezone_set("America/Sao_Paulo");
    $dataHoje = date("d/F/Y", time());
    $horaHoje = date("H:i:s", time());
    echo "Hoje é $dataHoje e agora são $horaHoje\n";