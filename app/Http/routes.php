<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //master view
    return view('pages.welcome');
    //return view('homepage');
});

Route::get('/cfus', function () {
    //show all cfus
    //return view('search');
});

Route::get('/cfus/skills/{skillname}', function () {
    //select all cfus with skillname
    //return view('searchresult');
    //use viewcomposer
    //with each link to a specific cfu
});

Route::get('/cfus/{id}', function () {
    //show
    //select cfu with a particular id
    //return view('searchresult');
});
Route::get('/cfus/create', function () {
    //create
    //Form to create a new cfu page
    //return view('newcfuform');
});

Route::post('/cfus/', function () {
    //store
    //Handle creation of new cfu page
});
Route::get('/cfus/{id}/edit', function () {
    //edit
    //Form to edit existing cfu page
});
Route::put('/cfus/{id}', function () {
    //update
    //Handle update of new cfu page
});