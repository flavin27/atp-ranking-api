<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function search($id) {
        return response()->json($id);
    }
}
