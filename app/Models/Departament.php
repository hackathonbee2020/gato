<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Departament extends Model
{
    protected $guarded = []; 

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($departament) {
            $departament->{$departament->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
