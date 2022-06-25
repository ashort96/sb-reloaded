<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Admin;
use App\Models\Ban;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function add(Request $request) {
        return $request->getContent();
    }

    public function all() {
        return Admin::all();
    }

    public function delete(Request $request, $id) {
        Admin::findOrFail($id)->delete();
        return 'Admin deleted';
    }

    public function get(Request $request, $id) {
        return Admin::findOrFail($id);
    }

    public function getBans(Request $request, $id) {
        $response = Ban::where('admin_id', $id)->get();
        return response()->json($response, 200);
    }
}
