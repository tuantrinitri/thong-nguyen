<?php

namespace Modules\Tour\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';

    protected $fillable = [
        'id',
        'title',
        'status'
    ];
}