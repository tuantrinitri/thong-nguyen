<?php

namespace Modules\Page\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    protected $table = 'page_transtions';

    protected $fillable = [
        'page_id',
        'content',
        'description',
        'title',
        'locale'
    ];
    public function pages()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
