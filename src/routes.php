<?php

use Codeucok\Minicalculator\Controllers\MiniCalculator;

Route::get('calculator', function () {
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', [MiniCalculator::class, 'add']);
Route::get('subtract/{a}/{b}', [MiniCalculator::class, 'subtract']);
