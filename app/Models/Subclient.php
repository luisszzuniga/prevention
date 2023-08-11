<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Subclient
 *
 */
class Subclient extends Company
{
    use HasFactory;

    /**
     * The company that belong to the subclients.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    /**
     * The client that belong to the subclients.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
     * The learners that belong to the subclients.
     */
    public function learners(): HasMany
    {
        return $this->hasMany(Learner::class, 'subclient_id');
    }

}
