<?php

namespace Modules\Activity\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityTranslation extends Model
{
    protected $table = 'activity_transtions';
    protected $fillable = [
        'id',
        'locale',
        'activity_id',
        'title',
        'description',
    ];
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
