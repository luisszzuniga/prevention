<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'center_acp_name',
        'observation',
        'seance_code'
    ];

    public function criteria()
    {
        return $this->belongsToMany(Criterion::class);
    }

    public function offers()
    {
        return $this->hasOne(Offer::class);
    }

    public function vehicles()
    {
        return $this->hasOne(Vehicle::class);
    }

    public function trainers()
    {
        return $this->hasOne(User::class);
    }

    public function learners()
    {
        return $this->hasOne(User::class);
    }

}

