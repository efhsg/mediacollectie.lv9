<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bestandstype extends Model
{
    protected $table = 'bestandstypes';

    public static function getAll(): array
    {
        return self::all()->toArray();
    }
}
