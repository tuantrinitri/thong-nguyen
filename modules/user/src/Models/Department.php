<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'user_departments';

    protected $fillable = [
        'name',
        'description',
        'roles',
        'default_role',
        'image',
        'color',
        'status'
    ];
}