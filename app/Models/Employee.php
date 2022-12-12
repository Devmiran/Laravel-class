<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'document',
        'birthdate',
        'age',
        'phone',
        'address',
        'job',

    ];

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }


    public function areas()
    {
        return $this->hasMany(Area::class);
    }


}
