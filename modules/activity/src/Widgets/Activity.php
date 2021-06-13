<?php

namespace Modules\Activity\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Modules\Activity\Models\Activity as ModelsActivity;

class Activity extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data['name'] = 'CMS';
        $data['activities'] = ModelsActivity::get();
        return view('activity::widget.activity', $data);
    }
}
