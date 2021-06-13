<?php

namespace Modules\Activity;

use Illuminate\Support\Facades\Schema;

class Module
{
    public static function uninstall()
    {
        Schema::dropIfExists('activites');
        Schema::dropIfExists('activity_transtions');
    }
}
