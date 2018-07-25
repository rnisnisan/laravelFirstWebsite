<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/foo', function () {
    return view ('foo');
 })-> name ('foo');


Route::get('/bar', function () {
    return view ('bar');
})-> name ('bar');

Route::get('/shoutout/{text}', function ($text) {
	$color= array ("red,blue,green");
    return view('shoutout',array('text'=>$text,'color'=> $color));
})->name ('shoutout');



Route::get('/arithmetic/{operator?}/{n1?}/{n2?}', function($operator=null,$n1=null,$n2=null){
	return view('/arithmetic',
		array('n1' => $n1,
					'n2' => $n2,
					'operator' => $operator
				)
	);

})->name('arithmetic');

Route::get('/addition',function(){
	return view('addition');
})->name('addition');
