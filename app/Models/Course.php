<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property string|null $observation
 * @property int|null $seance_code
 * @property int $offer_id
 * @property int $vehicle_id
 * @property int $center_id
 * @property int $user_id_trainer
 * @property int $user_id_learner
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Center|null $center
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Criterion[] $criteria
 * @property-read int|null $criteria_count
 * @property-read \App\Models\User|null $learners
 * @property-read \App\Models\Offer|null $offers
 * @property-read \App\Models\User|null $trainers
 * @property-read \App\Models\Vehicle|null $vehicles
 * @method static \Database\Factories\CourseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSeanceCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUserIdLearner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUserIdTrainer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereVehicleId($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
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

    public function center()
    {
        return $this->hasOne(Center::class);
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

