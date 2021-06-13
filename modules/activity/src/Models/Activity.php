<?php

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Activity extends Model implements TranslatableContract
{
    protected $table = 'activites';
    use Translatable;
    public $translatedAttributes = ['title', 'description'];
    protected $fillable = [
        'id',
        'link',
        'image',
        'order',
        'status',
    ];
    public function activityTranstion()
    {
        return $this->hasMany(ActivityTranslation::class);
    }
}
