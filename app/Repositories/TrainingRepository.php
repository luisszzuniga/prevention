<?php

namespace App\Repositories;

use App\Interfaces\TrainingInterface;
use App\Models\Training;
use Illuminate\Database\Eloquent\Collection;

class TrainingRepository implements TrainingInterface
{
    protected Training $training;

    public function __construct(Training $training)
    {
        $this->training = $training;
    }

    public function getTrainings(): Collection
    {
        return $this->training->all();
    }

}
