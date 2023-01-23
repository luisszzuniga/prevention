<?php

namespace App\Repositories;

use App\Interfaces\OfferInterface;
use App\Models\Offer;

class OfferRepository implements OfferInterface
{
    public function getAllOffers()
    {
        return Offer::all();
    }

}
