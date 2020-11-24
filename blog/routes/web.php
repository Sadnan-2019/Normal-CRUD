<?php

use Illuminate\Support\Facades\Auth;
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


/*Route::get('/BITM', "BitmController@index" );

Route::get('home','BitmController@newone');


Route::get('/', function () {
    //return view('welcome');
    return "HELLO DEAR";
});






Route::get('/BITM',[

    'uses'=>'BitmController@index',
    'as'=>'bitm'



]);
Route::get('/home',[

    'uses'=>'BitmController@newone',
    'as'=>'home'



]);
Route::post('/form',[

    'uses'=>'BitmController@myform',
    'as'=>'my-form'



]);
Route::get('/test',[

    'uses'=>'BitmController@test',
    'as'=>'test'



]);*/

Route::get('/',[

    'uses'=>'FrontController@index',
    'as'=>'/'



]);

Route::get('/team',[

    'uses'=>'FrontController@team',
    'as'=>'team'



]);


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/


Route::get('/home',[
    'uses'=>'HomeController@index',
    'as'=> 'home'


]);

Route::get('/team/add',[

    'uses'=>'TeamController@index',
    'as'=>'add-team'


]);
Route::post('/team/save',[

    'uses'=>'TeamController@saveMember',
    'as'=>'new-member'


]);


Route::get('/team/manage',[

    'uses'=>'TeamController@manageMember',
    'as'=>'manage-teamdetails'


]);

Route::get('/team/unpublishmember/{id}',[

    'uses'=>'TeamController@Unpublishmember',
    'as'=>'unpublished-team'


]);
Route::get('/team/publishmember/{id}',[

    'uses'=>'TeamController@Publishmember',
    'as'=>'published-team'


]);
Route::get('/team/eidtmember/{id}',[

    'uses'=>'TeamController@Editmember',
    'as'=>'edit-team'


]);


Route::post('/team/updatemember',[

    'uses'=>'TeamController@Updatemember',
    'as'=>'update-member'


]);

Route::get('/team/deletemember/{id}',[

    'uses'=>'TeamController@Deletemember',
    'as'=>'delete-team'


]);

Route::get('/album/add',[

    'uses'=>'AlbumController@index',
    'as'=>'add-album'


]);





