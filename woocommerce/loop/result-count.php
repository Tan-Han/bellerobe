<?php

$total = wc_get_loop_prop('total');
if ($total === 0) {
    echo 'Det ser ud til at der endnu ikke er tilføjet produkter til denne side...';
}

?>