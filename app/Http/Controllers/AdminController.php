<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Demand;
use App\Offer;

class AdminController extends Controller
{
    public function index(){
        $offers = Offer::all();
        $demands = Demand::all();
        return view('admin', ["offers" => $offers, "demands" => $demands]);
    }
}
