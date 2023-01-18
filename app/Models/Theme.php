<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Theme
 *
 * @property int $id
 * @property string $text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Criterion[] $criteria
 * @property-read int|null $criteria_count
 * @property-read \App\Models\Evaluation|null $evaluations
 * @property-read \App\Models\Progress|null $progress
 * @method static \Database\Factories\ThemeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme query()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereText($value)
 * @mixin \Eloquent
 */
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

    /**
     * Get the Criteria that belongs to the Theme.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function criteria()
    {
        return $this->belongsToMany(Criterion::class);
    }

    /**
     * Get the Evaluation that belongs to the Theme.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evaluations()
    {
        return $this->hasOne(Evaluation::class);
    }

    /**
     * Get the Progress that belongs to the Theme.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function progress()
    {
        return $this->hasOne(Progress::class);
    }


}
