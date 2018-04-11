<?php

$namespace = 'Lalustine7\Calculator\Http\Controllers';

Route::group([

	'namespace' => $namespace,
	'prefix' => 'calculator',
], function() {
	
	Route::get('/','CalculatorContorller@index');


});