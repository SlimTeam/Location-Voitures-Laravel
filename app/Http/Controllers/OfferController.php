<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Offer;
use App\Interval;

class OfferController extends Controller
{

    public function create(Request $request)
    {

        $input = $request->all();
        $title = $request['title'];
        $intervals = $request['intervals'];

        $newOffer = new Offer;
        $newOffer->title = $title;
        $newOffer->save();

        foreach($intervals as $interval){
            $newInterval = new Interval;
            $startDate = $interval['start']['date']." ".$interval['start']['hour'].":".$interval['start']['minutes'];
            $endDate = $interval['end']['date']." ".$interval['end']['hour'].":".$interval['end']['minutes'];
            $newInterval->start_date = $startDate;
            $newInterval->end_date = $endDate;
            $newOffer->intervals()->save($newInterval);
        }
        return redirect('/')->with('status', 'Votre offre a été crée');
        //retrieve title
        //retrieve the intervals
        //create the Offer
        //create its intervals
        //redirect to success page
    }
}
