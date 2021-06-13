<?php

namespace Modules\Page\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use Modules\Page\Models\Page;
use Modules\Page\Repositories\Interfaces\PageInterface;

class WebController extends BaseController
{
    public function detail(string $slug)
    {
        app()->getLocale();
        $page = Page::where('slug', $slug)->where('status', 1)->first();
        if (!empty($page)) {
            return view('page::web.detail_page', compact('page'));
        }
        return abort(404);
    }
}
