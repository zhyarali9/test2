<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/home','shopController@index');

Route::get('/shopper/{city_name}/{shop_assistant}/{list_id}','shopController@show');

// // insert
// Route::get('/add', function () {
//     DB::insert("INSERT INTO `posts` (`post_title`,`post_price`,`post_image`,`userid`) VALUES('socket','10.00','socket.jpg','3')");
// });

// // delete
// Route::get('/delete', function () {
//     DB::delete("DELETE FROM `posts` WHERE `post_id`=1");
// });

// // Edit
// Route::get('/edit', function () {
//     DB::update("UPDATE `posts` SET `post_title`='coat' WHERE `post_id`=2");
// });

// // Select
// Route::get('/view', function () {
//     $select=DB::select("SELECT * FROM `posts`");


// echo "<table border='1'>
// <tr><th>post title</th> <th>post price</th> <th>post image</th> <th>userid</th></tr> ";

// foreach ($select as $sel => $value) {

//     echo "<tr><td>$value->post_title</td> <td>$value->post_price</td> <td>$value->post_image</td> <td>$value->userid</td></tr>";
// }

// echo "</table>";





// });

