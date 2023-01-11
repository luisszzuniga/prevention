<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description'

    ];


    public function courses(){

        return $this->hasMany(Course::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class,'offer_feature');
    }
}
