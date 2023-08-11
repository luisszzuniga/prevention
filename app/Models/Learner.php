<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Learner
 *
 */
class Learner extends User
{
    use HasFactory;

    /**
     * The users that belong to the learner.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The vehicle that the learner owns.
     */
    public function vehicle(): HasOne
    {
        return $this->hasOne(Vehicle::class);
    }

    /**
     * The subclient that belongs to the learner .
     */
    public function subclient(): BelongsTo
    {
        return $this->belongsTo(Subclient::class, 'subclient_id');
    }

    /**
     * The trainings that the learner is associated with.
     */
    public function trainings(): BelongsToMany
    {
        return $this->belongsToMany(Training::class, 'training_learner', 'learner_id', 'training_id');
    }

}

