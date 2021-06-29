<?php

namespace Modules\Tour\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    protected $fillable = [
        'id',
        'title', // ten dia diem
        'status',
    ];
}