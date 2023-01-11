<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'text'

    ];
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function themes()
    {
        return $this->belongsToMany(Theme::class);
    }

}
