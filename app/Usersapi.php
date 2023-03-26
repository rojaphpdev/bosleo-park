<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersapi extends Model
{
    // use HasFactory;
    public $table="usersapi";

    protected $fillable = [
        'gender',
        'title',
        'first_name',
        'last_name',
        'street',
        'city',
        'state',
        'country',
        'postcode',
        'email',
        'phone',
        'picture',
    ];
}
