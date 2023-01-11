<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Progress
 *
 * @property int $id
 * @property string|null $text
 * @property int $theme_id
 * @property-read \App\Models\Theme|null $themes
 * @method static \Database\Factories\ProgressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Progress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Progress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Progress query()
 * @method static \Illuminate\Database\Eloquent\Builder|Progress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Progress whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Progress whereThemeId($value)
 * @mixin \Eloquent
 */
class Progress extends Model
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

    public function themes(){

        return $this->hasOne(Theme::class);
    }
}
