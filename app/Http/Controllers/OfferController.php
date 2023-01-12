<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        $offer1 = Offer::whereId(1);
        $offer2 = Offer::whereId(2);
        $offer3 = Offer::whereId(3);


        return view('offers')->with(
            [ 'offer1' => $offer1,
                'offer2' => $offer2,
                'offer3' => $offer3,
            ]);
    }
}
