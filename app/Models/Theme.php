<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
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

    public function criteria()
    {
        return $this->belongsToMany(Criterion::class);
    }

    public function evaluations()
    {
        return $this->hasOne(Evaluation::class);
    }
    public function progress()
    {
        return $this->hasOne(Progress::class);
    }


}
