<?php

namespace Modules\Page\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Page extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title', 'content', 'description'];
    protected $table = 'pages';
    protected $fillable = [
        'id',
        'image',
        'status',
        'slug',
        'order',
    ];
    public function ptranstion()
    {
        return $this->hasMany(PageTranslation::class);
    }
}
