<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CenterInterface
{
    public function getCenters(): Collection;
}

