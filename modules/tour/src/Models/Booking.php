<?php

namespace Modules\Tour\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'id',
        'customer',
        'address',
        'total_customer',
        'email',
        'phone',
        'note',
        'status',
        'tour_id',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}