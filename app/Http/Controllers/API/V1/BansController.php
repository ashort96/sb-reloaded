<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Ban;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BansController extends Controller
{

    public function add(Request $request) {
        return $request->getContent();
    }

    public function all(Request $request) {
        return Ban::all();
    }

    public function delete(Request $request, $id) {
        Ban::findOrFail($id)->delete();
        return 'Ban deleted';
    }

    public function get(Request $request, $id) {
        return Ban::findOrFail($id);
    }
    
    
}
