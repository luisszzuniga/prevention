<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface TrainingInterface
{
    public function getTrainings(): Collection;
}

