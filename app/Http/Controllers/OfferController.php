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
        $offers = Offer::all();

        return view('offers')->with(
            ['offers' => $offers]);
    }
}
