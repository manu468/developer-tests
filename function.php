<?php 
    function make_pipeline(...$functions) {
    return  function($arg) use ($functions)
    {
     foreach ($functions as $function) {
                $arg = $function($arg);
        }
        return $arg;
    };
}
    $result = make_pipeline(
        function($x) { return $x * 3; },
        function($x) { return $x + 1; },
        function($x) { return $x / 2; }
    );
    print_r ($result(99));
?>