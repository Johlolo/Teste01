<?php


function SeculoAno($ano) {
    $sec1 = substr($ano, 0, 2);
    $sec2 = substr($ano, 2, 2);
    if ($sec2 > 0) {
        $sec = $sec1 + 1;
        return $sec;
    } else {
        return $sec1;
    }
}

echo SeculoAno(1905);
echo ("<br>");
echo SeculoAno(1700);

?>