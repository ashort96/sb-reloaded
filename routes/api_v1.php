<?php

use App\Models\Server;
use App\Models\ServerGroup;
use App\Http\Controllers\API\V1\AdminGroupsController;
use App\Http\Controllers\API\V1\AdminsController;
use App\Http\Controllers\API\V1\BansController;
use App\Http\Controllers\API\V1\ServerGroupsController;
use App\Http\Controllers\API\V1\ServersController;

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

Route::get('/admins', [AdminsController::class, 'all']);

Route::post('/admins', [AdminsController::class, 'add']);

Route::delete('/admins/{id}', [AdminsController::class, 'delete']);

Route::get('/admins/{id}', [AdminsController::class, 'get']);

Route::get('/admins/{id}/bans', [AdminsController::class, 'getBans']);


// MARK: Admin Group

Route::get('/admingroups', [AdminGroupsController::class, 'all']);

Route::get('/admingroup/{id}', [AdminGroupsController::class, 'get']);

// MARK: Ban

Route::get('/bans', [BansController::class, 'all']);

Route::patch('/bans/{id}', [BansController::class, 'update']);

Route::post('/bans', [BansController::class, 'all']);

Route::delete('/bans/{id}', [BaseController::class, 'delete']);

Route::get('/bans/{id}', [BansController::class, 'get']);

// MARK: Server

Route::get('/servers', [ServersController::class, 'all']);

Route::get('/servers/{id}', [ServersController::class, 'get']);

Route::post('/servers', [ServersController::class, 'add']);

Route::delete('/servers/{id}', [ServersController::class, 'delete']);

Route::get('/servers/{id}/admins', [ServersController::class, 'getAdmins']);

// MARK: Server Group

Route::get('/servergroups', function (Request $request) {
    return ServerGroup::all();
});

Route::get('/servergroups/{id}', function (Request $request, $id) {
    $servers = ServerGroup::find($id)->servers;

    return response()->json($servers, 200);
});

Route::post('/servergroups', function (Request $request) {
    return 'should add a server group';
});