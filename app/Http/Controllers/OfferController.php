<?php

namespace App\Http\Controllers;

use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display the listing of the offers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $offer1 = Offer::find(1);
        $offer2 = Offer::find(2);
        $offer3 = Offer::find(3);


        return view('offers')->with(
            ['offer1' => $offer1,
                'offer2' => $offer2,
                'offer3' => $offer3,
            ]);
    }
}
