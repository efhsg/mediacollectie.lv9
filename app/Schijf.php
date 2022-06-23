<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schijf extends Model
{
    protected $table = 'schijven';

    public static function getAll(): array
    {
        return self::all()->toArray();
    }

}
