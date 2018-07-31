<?php
$namespace = 'App\Modules\Module1\Controllers';


Route::group(
    ['namespace' => $namespace],
    function() {
        Route::get('module1', [
            'as' => 'index',
            'uses' => 'Module1Controller@index'
        ]);
    }
);
