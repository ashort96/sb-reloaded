<?php

use App\Models\Server;
use App\Http\Controllers\API\V1\AdminController;
use App\Http\Controllers\API\V1\ServerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// MARK: Admin

Route::get('/admins', [AdminController::class, 'all']);

Route::post('/admin', [AdminController::class, 'add']);

Route::delete('/admin/delete', [AdminController::class, 'delete']);

Route::get('/admin/{id}', [AdminController::class, 'get']);


// MARK: Admin Group

Route::get('/admingroups', function (Request $request) {
    return 'should get all admingroups';
});

Route::get('/admingroup/{id}', function (Request $request, $id) {
    return 'should get admingroup with id '.$id;
});

// MARK: Ban

Route::get('/bans', function (Request $request) {
    return 'should get all bans';
});

Route::delete('/ban', function (Request $request, $id) {
    return 'should delete a ban with id '.$id;
});

Route::patch('/ban', function (Request $request) {
    return 'should patch a ban: '.$request->getContent();
});

Route::post('/ban', function (Request $request) {
    return 'should post a new ban';
});

Route::get('/ban/{id}', function (Request $request, $id) {
    return 'should get ban with id '.$id;
});

// MARK: Server

Route::get('/servers', [ServerController::class, 'all']);

Route::get('/server/{id}', [ServerController::class, 'get']);

Route::post('/server/add', [ServerController::class, 'add']);

Route::delete('/server/{id}', [ServerController::class, 'delete']);

Route::get('/server/{id}/admins', function (Request $request, $id) {
    return 'should get all admins for server '.$id;
});

// MARK: Server Group

Route::get('/servergroups', function (Request $request) {
    return 'should get all server groups';
});

Route::get('/servergroup/${id}', function (Request $request) {
   return 'should get server group with id '.$id; 
});

Route::post('/servergroup', function (Request $request) {
    return 'should add a server group';
});