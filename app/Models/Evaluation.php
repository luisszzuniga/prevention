<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Evaluation
 *
 * @property int $id
 * @property int $note
 * @property int $theme_id
 * @property-read \App\Models\Theme|null $themes
 * @method static \Database\Factories\EvaluationFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Evaluation whereThemeId($value)
 * @mixin \Eloquent
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function themes(){

        return $this->hasOne(Theme::class);
    }
}
