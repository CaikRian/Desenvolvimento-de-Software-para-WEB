<?php

function printIterables(Iterable $myIterable) {
    foreach ($myIterable as $item) {
        echo $item;
    }
}
 $arr = ["a", "b", "c"];
 printIterables($arr);



?>