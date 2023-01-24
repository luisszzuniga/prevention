<?php

namespace App\Repositories;

use App\Interfaces\TrainerInterface;
use App\Models\User;

class TrainerRepository implements TrainerInterface
{
    public function getTrainers()
    {
        return User::all();
    }

}
