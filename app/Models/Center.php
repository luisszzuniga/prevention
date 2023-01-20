<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Center
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Course[] $courses
 * @property-read int|null $courses_count
 * @method static \Database\Factories\CenterFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Center newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Center newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Center query()
 * @method static \Illuminate\Database\Eloquent\Builder|Center whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Center whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Center whereName($value)
 * @mixin \Eloquent
 */
class Center extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'address',
    ];

    /**
     * The courses that belong to the center.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses(){

        return $this->hasMany(Course::class);
    }
}
