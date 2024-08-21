<?php 

function Tong($a, $b) {
    return $a + $b;
}


function Hieu($a, $b) {
    return $a - $b;
}

function Tich($a, $b) {
    return $a * $b;
}

function Thuong($a, $b) {
    return $a / $b;
}

function So_nguyen_to($num) {
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}
function Chan_le($n){
    if ($n % 2 == 0 ){
        return "<br>$n là số chẵn";
    }else{
        return "<br>$n là số lẻ";
    }
}


?>