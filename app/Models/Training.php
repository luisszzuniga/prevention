<?php

namespace App\Models;

use Database\Factories\CourseFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property string|null $observation
 * @property int|null $seance_code
 * @property int $offer_id
 * @property int $center_id
 * @property int $user_id_trainer
 * @property int $user_id_learner
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Center|null $center
 * @property-read Collection|Criterion[] $criteria
 * @property-read int|null $criteria_count
 * @property-read User|null $learners
 * @property-read Offer|null $offers
 * @property-read User|null $trainers
 * @property-read Vehicle|null $vehicles
 * @method static CourseFactory factory(...$parameters)
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereCenterId($value)
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereObservation($value)
 * @method static Builder|Course whereOfferId($value)
 * @method static Builder|Course whereSeanceCode($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @method static Builder|Course whereUserIdLearner($value)
 * @method static Builder|Course whereUserIdTrainer($value)
 * @method static Builder|Course whereVehicleId($value)
 * @mixin Eloquent
 * @property string $date
 * @property-read Collection|\App\Models\Course[] $courses
 * @property-read int|null $courses_count
 * @method static Builder|Training whereDate($value)
 */
class Training extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'seance_code'
    ];

    /**
     * The offer that the course has.
     *
     * @return HasOne
     */
    public function offers()
    {
        return $this->hasOne(Offer::class);
    }

    /**
     * The center that the course belongs to.
     *
     * @return HasOne
     */
    public function center()
    {
        return $this->hasOne(Center::class);
    }

    /**
     * The trainer that the course has.
     *
     * @return HasOne
     */
    public function trainer()
    {
        return $this->hasOne(User::class);
    }

    /**
     * The learner that the course has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function learner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The courses that belong to the training.
     *
     * @return HasMany
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}

