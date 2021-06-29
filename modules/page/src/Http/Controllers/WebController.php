<?php

namespace Modules\Page\Http\Controllers;

use Core\Http\Controllers\WebController as ControllersWebController;
use Modules\Page\Repositories\Interfaces\PageInterface;

class WebController extends ControllersWebController
{
    protected static $pageRepository;

    function __construct(PageInterface $pageRepository)
    {
        self::$pageRepository = $pageRepository;
    }

    public static function getDetailPage(string $slug)
    {
        $page = self::$pageRepository->getDetailsPageBySlug($slug);
        return view('page::web.detail_page', compact('page'))->withShortcodes();
    }
}
