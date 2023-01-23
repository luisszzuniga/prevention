<?php

namespace App\Http\Controllers;

use App\Interfaces\OfferInterface;
use App\Models\Offer;
use App\Repositories\OfferRepository;

class OfferController extends Controller
{

    private OfferInterface $offerRepository;

    public function __construct(OfferInterface $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

    /**
     * Display the listing of the offers.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $offers = $this->offerRepository->getAllOffers();

        return view('offers')->with(
            ['offers' => $offers]);
    }
}
