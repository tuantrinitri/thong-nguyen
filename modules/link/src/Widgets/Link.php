<?php

namespace Modules\Link\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Modules\Link\Models\Link as ModelsLink;

class Link extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data['links'] = ModelsLink::where('type', 0)->get();
        $data['name'] = 'CMS';
        return view('link::widget.link', $data);
    }
}
