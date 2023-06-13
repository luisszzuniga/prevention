<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Criterion
 *
 * @property int $id
 * @property string $text
 * @property-read Collection|Course[] $courses
 * @property-read int|null $courses_count
 * @property-read Collection|Theme[] $themes
 * @property-read int|null $themes_count
 * @method static \Database\Factories\CriterionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Criterion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Criterion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Criterion query()
 * @method static \Illuminate\Database\Eloquent\Builder|Criterion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Criterion whereText($value)
 */
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

    /**
     * The courses that the criterion belongs to.
     *
     * @return BelongsToMany
     */
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    /**
     * The themes that the criterion belongs to.
     *
     * @return BelongsToMany
     */
    public function themes(): BelongsToMany
    {
        return $this->belongsToMany(Theme::class);
    }

}
