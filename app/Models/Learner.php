<?php

namespace App\Models;

use App\Models\Scopes\WithUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OpenApi\Annotations as OA;

/**
 *  App\Models\Lesson
 *
 * @OA\Schema (
 *      schema="Learner",
 *      required={"mail", "subclient_id"},
 *
 *      @OA\Property(
 *          property="lastname",
 *          description="trainer's lastname"
 *      ),
 *     @OA\Property(property="subclient_id", type="integer", description="Learner's enterprise", readOnly=true),
 *  ),
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

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new WithUserScope());
    }
}

