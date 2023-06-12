<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $phone
 * @property string $password
 * @property string $address
 * @property string|null $zip_code
 * @property string|null $town
 * @property string|null $remember_token
 * @property int|null $company_id
 * @property int|null $user_id_trainer
 * @property int|null $user_id_learner
 * @property int $role_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Company|null $companies
 * @property-read Collection|Course[] $coursesLearners
 * @property-read int|null $courses_learners_count
 * @property-read Collection|Course[] $coursesTrainers
 * @property-read int|null $courses_trainers_count
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Role|null $roles
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereAddress($value)
 * @method static Builder|User whereCompanyId($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereFirstname($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastname($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User wherePhone($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereRoleId($value)
 * @method static Builder|User whereTown($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @method static Builder|User whereUserIdLearner($value)
 * @method static Builder|User whereUserIdTrainer($value)
 * @method static Builder|User whereZipCode($value)
 * @mixin Eloquent
 * @property int|null $trainer_id
 * @property-read Collection|\App\Models\Vehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static Builder|User whereTrainerId($value)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'password',
        'address',
        'zip_code',
        'town',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the trainings that the user is learner
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trainingsLearners()
    {
        return $this->hasMany(Training::class, 'user_id_learner');
    }

    /**
     * Get the trainings that the user is trainer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trainingsTrainers()
    {
        return $this->hasMany(Training::class,'user_id_trainer');
    }

    /**
     * Get the company that the user belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the role that the user belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * The vehicles that belong to the user.
     *
     * @return HasMany
     */
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class,'learner_id');
    }

}
