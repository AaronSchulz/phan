<?php

function foo340($x, int $y) : int {
    return is_string($x) ? $x : $y;
}
// emit PhanTypeMismatchReturnReal for array -> scalar because that will throw at runtime.
function foo340b($x, $y, array $z) : int {
    return is_string($x) ? ($y === true ?: strlen($x)) : $z;
}
class A340 {
    function foo($x, int $y) : int {
        return is_string($x) ? $x : $y;
    }
}
