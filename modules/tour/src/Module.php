<?php

namespace Modules\Tour;

use Illuminate\Support\Facades\Schema;

class Module
{
    public static function uninstall()
    {
        Schema::dropIfExists('lcoations');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('tour_programs');
        Schema::dropIfExists('tour_content_programs');
        Schema::dropIfExists('tour_notes');
        Schema::dropIfExists('tour_opinions');
        Schema::dropIfExists('tour_booking');
        Schema::dropIfExists('tour_customer_booking');
    }
}