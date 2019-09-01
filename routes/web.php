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

use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

/* list2-3 */
Route::get('hello23', function(){
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});

/* list2-4 */
$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello</h1>
<p>This is sample page.</p>
<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;
Route::get('hello24', function() use ($html) {
    return $html;
});

/* list2-5 */
Route::get('hello25/{msg?}', function($msg='no message.') {
    $html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body{font-size: 16pt; color: #999;}
h1{font-size: 100pt; text-align: right; color: #eee;
  margin: -40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>Hello</h1>
<p>{$msg}</p>
<p>これは、サンプルで作ったページです。</p>
</body>
</html>
EOF;
    return $html;
});

/* list2-8 */
Route::get('hello28', 'HelloController@index');

/* list2-10 */
Route::get('hello210/{id?}/{pass?}', 'HelloController@index210');

/* list2-11 */
Route::get('hello211', 'HelloController@index211');
Route::get('hello211/other', 'HelloController@other211');

/* list2-13, list2-14 */
Route::get('hello213', 'HelloController');

/* list2-15 */
Route::get('hello215', 'HelloController@index215');
