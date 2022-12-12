<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_contract extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',

        
    ];

    public function contract()
    {
        return $this->hasMany(Type_contract::class);
    }

}



