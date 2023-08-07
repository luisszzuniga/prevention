<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Client
 *
 */
    class Client extends Company
{
    use HasFactory;

    protected $fillable = ['company_id'];

    /**
     * The users that belong to the company.
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
