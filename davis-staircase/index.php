<?php 

$n = 6;

echo stepPerms($n);

function stepPerms($n) {

    if ($n == 0) {
        return 1;
    }

    if ($n < 0) {
        return 0;
    }
    
    return stepPerms($n - 1) + stepPerms($n - 2) + stepPerms($n - 3);

}

