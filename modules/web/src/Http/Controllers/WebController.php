<?php

namespace Modules\Web\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use File;

class WebController extends BaseController
{
    public static function index()
    {
        page_title()->setTitle('Trang chủ');
       
        return view('web::web.index');
    }

    public static function test()
    {
        page_title()->setTitle('Trang chủ');
        $images = File::allFiles(public_path('/upload/image-gallery'));
        $videos = File::allFiles(public_path('/upload/video-gallery'));
        return view('web::web.test', compact('images', 'videos'));
    }

    public static function tourdetail()
    {
        
        

        return view('web::web.tour_detail');
    }

    public static function booking()
    {
        
        
        return view('web::web.booking');
    }
}
