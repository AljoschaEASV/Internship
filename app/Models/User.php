<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'profile_picture',
        'lastName',
        'email',
        'password',
        'gender_id',
        'address_id',
    ];

    /**
     * Getter for the image.
     *
     * @param string $profilePicture
     * @return string
     */
    public function getProfilePictureAttribute(string $profilePicture): string
    {
        return Storage::url($profilePicture);
    }

    /**
     * The eloquent accessor, which will, given the setAttributeAttribute Syntax,
     * run the provided data against that method and change it to upper case.
     *
     * @param string $firstName
     * @return string
     */
    public function getfirstNameAttribute(string $firstName): string
    {
        return ucwords($firstName);
    }

    /**
     * The eloquent accessor, which will, given the setAttributeAttribute Syntax,
     * run the provided data against that method and change it to upper case.
     *
     * @param string $lastName
     * @return string
     */
    public function getLastNameAttribute(string $lastName): string
    {
        return ucwords($lastName);
    }

    /**
     * The eloquent mutator, which will, given the setAttributeAttribute Syntax
     * Which means we pass the external attribute to the model.
     * Where the given attribute always will be changed in the underlying array.
     *
     * This is Mutating
     *
     * @param string $password
     * @return void
     */
    public function setPasswordAttribute(string $password): void
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'datetime',
    ];

    /**
     * @return BelongsTo
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    /**
     * @return BelongsToMany
     */
    public function interests(): BelongsToMany
    {
        return $this->belongsToMany(Interest::class, 'interests_users');
    }

    /**
     * @return HasMany
     */
    public function gardens(): HasMany
    {
        return $this->hasMany(Garden::class);
    }

    /**
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
