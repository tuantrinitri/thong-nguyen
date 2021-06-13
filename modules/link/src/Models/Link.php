<?php

namespace Modules\Link\Models;

use Core\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use Filterable;
    protected $table = 'links';

    protected $fillable = [
        'id',
        'title',
        'link',
        'type'
    ];
    protected $filterable = [
        'title'
    ];
    public function filterTitle($query, $value)
    {
        return $query->where('title', 'LIKE', '%' . $value . '%');
    }
}
