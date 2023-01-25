<?php

namespace App\Repositories;

use App\Interfaces\TrainingInterface;
use App\Models\Training;

class TrainingRepository implements TrainingInterface
{
    public function getTrainings()
    {
        return Training::all();
    }

}
