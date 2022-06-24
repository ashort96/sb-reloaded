<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Server;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServersController extends Controller
{

    public function add(Request $request) {
        return $request->getContent();
    }

    public function all() {
        return Server::all();
    }

    public function delete(Request $request, $id) {
        Server::findOrFail($id)->delete();
        return 'Server deleted';
    }

    public function get(Request $request, $id) {
        return Server::findOrFail($id);
    }

    public function getAdmins(Request $request, $id) {
        $admins = Server::find($id)->admins;
        return response()->json($admins, 200);
    }


}
