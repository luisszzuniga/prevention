<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Evaluation
 *
 * @property int $id
 * @property int $note
 * @property int $theme_id
 * @property-read Theme|null $themes
 * @method static \Database\Factories\EvaluationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereThemeId($value)
 */
class Evaluation extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'note'

    ];

    /**
     * The theme that the evaluation belongs to.
     *
     * @return BelongsTo
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
