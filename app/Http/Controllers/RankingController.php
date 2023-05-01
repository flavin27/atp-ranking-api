<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RankingProvider;

class RankingController extends Controller
{
    public function search($id) {
        
        $data = RankingProvider::getRanking($id);
        
        return response()->json($data);
    }
}
