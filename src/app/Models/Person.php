<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    protected $with = ['emails', 'phoneNumbers'];

    public function emails()
    {
        return $this->hasMany(Email::class, 'person_id');
    }

    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class, 'person_id');
    }
}
