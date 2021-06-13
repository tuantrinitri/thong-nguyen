<?php

namespace Modules\Page;

use Illuminate\Support\Facades\Schema;

class Module
{
    public static function uninstall()
    {
        Schema::dropIfExists('pages');
        Schema::dropIfExists('page_transtions');
    }
}
