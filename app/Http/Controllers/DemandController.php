<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Demand;

class DemandController extends Controller
{
    public function search($startDate, $endDate){
        $offers = DB::table('offer_intervals')
            ->where("start_date", ">=", $startDate)
            ->where("end_date", "<=", $endDate)
            ->join('offers', 'offer_intervals.offer_id', '=', 'offers.id')
            ->get();
        return $offers;
    }

    public function searchForDemand($demand_id){
        $demand = Demand::find($demand_id);
        $offers = $this->search($demand->start_date, $demand->end_date);
        return view('demand_results', ["offers" => $offers]);
    }

    public function create(Request $request)
    {


        $interval = $request['intervals'][0];
        $startDate = $interval['start']['date']." ".$interval['start']['hour'].":".$interval['start']['minutes'];
        $endDate = $interval['end']['date']." ".$interval['end']['hour'].":".$interval['end']['minutes'];
        $offers = $this->search($startDate, $endDate);
        $newDemand = new Demand;
        $newDemand->start_date = $startDate;
        $newDemand->end_date = $endDate;
        $newDemand->save();
        return view('demand_results', ["offers" => $offers]);
    }
}
