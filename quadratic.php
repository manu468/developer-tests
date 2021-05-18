<?php
/**
 * @return array containing roots
 */
    function findRoots ($a,$b, $c) {
        return [
            (-$b + sqrt(pow($b, 2) - ((4 * $a) * $c))) / (2 * $a),
            (-$b - sqrt(pow($b, 2) - ((4 * $a) * $c))) / (2 * $a),
        ];
    }
   print_r(findRoots(2,10,8));
   ?>