<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Subclient
 *
 */
class Subclient extends Company
{
    use HasFactory;

    /**
     * The trainers that belong to the subclients.
     */
    public function trainers(): BelongsToMany
    {
        return $this->belongsToMany(Trainer::class, 'trainer_subclient', 'subclient_id', 'trainer_id');
    }

}
