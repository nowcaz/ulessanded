//ül 7, Jan-Kenyon Noukas TARpe22 24.10.2023

<?php
function genereeri_arvud($algus, $lopp) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i++) {
        $arvud[] = $i;
    }
    return $arvud;
}

function genereeri_arvud_sammuga($algus, $lopp, $samm) {
    $arvud = [];
    for ($i = $algus; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}
?>