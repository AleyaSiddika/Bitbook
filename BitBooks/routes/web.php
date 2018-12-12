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

Route::get('/', function () {
    return view('/auth.login');
});

Route::get('/Search', 'SearchController@search');

Route::post('/status', 'StatusController@store');

Route::post('/comments/{id}', 'CommentController@store');
Route::get('/comments/{id}', 'CommentController@store');
Route::post('/Likes', 'LikeController@store');
Route::get('/Likes', 'LikeController@showLike');

Route::post('/Timeline-edit-profile', 'InformationController@store');
//Route::post('/changeProfile', 'InformationController@store');


Route::post('/changeProfile', 'InformationController@storeImage');
Route::post('/changeCover', 'InformationController@storeCoverPhoto');
Route::get('/changeProfile', 'InformationController@uploadImage');
Route::get('/changeCover', 'InformationController@uploadCover');


Route::post('/Timeline-edit-work', 'InformationController@storeWork');
Route::post('/Timeline-edit-interest', 'InformationController@storeInterest');

Route::get('/Newsfeed', 'StatusController@index');
Route::get('/Edit-post/{id}/edit', 'StatusController@edit');
Route::post('/Edit-post/{id}', 'StatusController@update');
Route::get('/Edit-image/{id}/image', 'StatusController@image');
Route::post('/Edit-image/{id}', 'StatusController@updateImage');
Route::get('/Delete-post/{id}', 'StatusController@destroy');



Route::get('/Timeline', 'StatusController@indexTimeline');

Route::get('/Friend-timeline/{id}', 'InformationController@FriendTimeline');
Route::get('/Friend-timeline-about/{id}', 'InformationController@FriendTimelineAbout');
Route::get('/Friend-timeline-album/{id}', 'InformationController@FriendTimelineAblbum');
Route::get('/Friend-timeline-friends/{id}', 'InformationController@FriendTimelineFriends');

Route::get('/MyFriend-timeline/{id}', 'InformationController@MyFriendTimeline');
Route::get('/MyFriend-timeline-about/{id}', 'InformationController@MyFriendTimelineAbout');
Route::get('/MyFriend-timeline-album/{id}', 'InformationController@MyFriendTimelineAblbum');
Route::get('/MyFriend-timeline-friends/{id}', 'InformationController@MyFriendTimelineFriends');

Route::get('/Find-friends', 'FriendController@findFriends');

Route::post('/Send_request', 'FriendController@sendRequest');
Route::post('/Send_request_timelin', 'FriendController@sendRequestTimeline');

Route::get('/Show-request', 'FriendController@showRequest');

Route::get('/confirmFriend/{id}/{u_name}', 'FriendController@confirmFriend');
Route::get('Confirm-Friend-timeline/{id}', 'InformationController@confirmFriendTimeline');
Route::get('/Unfriend/{id}', 'FriendController@unFriend');
Route::get('/Reject/{id}', 'FriendController@Reject');

Route::get('/My-friends', 'FriendController@showMyFriend');
Route::get('/Chat', 'ChatController@index');
Route::get('/Image', 'ImageController@index');
Route::get('/Video', 'ImageController@indexVideo');
Route::get('/Timeline-about', 'InformationController@index');


Route::get('/Timeline-album', 'InformationController@album');

Route::get('/Timeline-friends', 'InformationController@timelineFriends');

Route::get('/Timeline-edit-profile', 'InformationController@profile');

Route::get('/Timeline-edit-work', 'InformationController@work');

Route::get('/Timeline-edit-interest', 'InformationController@interest');

Route::get('/Account-setting', 'InformationController@account');

Route::get('/Change-password', 'InformationController@changePass');


Route::get('/Contact', function () {
    return view('/contact.contact');
});
Route::post('/Send_message', function () {
    return view('/contact.send_message');
});





Auth::routes();
//Route::get('/Newsfeed', 'HomeController@index')->name('Newsfeed');
Route::get('/home', 'HomeController@index')->name('home');
