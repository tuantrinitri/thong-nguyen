<?php

namespace Modules\Link\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Modules\Link\Models\Link;

class Video extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data['videos'] = Link::where('type', 1)->get();
        $data['name'] = 'CMS';
        return view('link::widget.video', $data);
    }
}
