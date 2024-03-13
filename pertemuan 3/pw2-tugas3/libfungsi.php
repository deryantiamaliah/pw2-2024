<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
*/

function kelulusan($totalNilai) {
    /**
    * Function kelulusan, jika:
    * total nilai lebih dari 55 maka lulus
    * total nilai kurang dari atau sama dengan 55 maka tidak lulus
    */
    if ($totalNilai > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade($totalNilai) {
    /**
    * Function grade, jika:
    * total nilai <= 100 maka A
    * total nilai <= 84 maka B
    * total nilai <= 69 maka C
    * total nilai <= 55 maka D
    * total nilai <= 35 maka E
    * selain itu maka I
    */ 
    if ($totalNilai <= 100) {
        return "A";
    } elseif ($totalNilai <= 84) {
        return "B";
    } elseif ($totalNilai <= 69) {
        return "C";
    } elseif ($totalNilai <= 55) {
        return "D";
    } elseif ($totalNilai <= 35) {
        return "E";
    } else {
        return "I";
    }
}
?>
