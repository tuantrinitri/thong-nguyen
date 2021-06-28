<?php

namespace Modules\Post\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use Illuminate\Support\Facades\App;
use Modules\Post\Models\Category;
use Modules\Post\Models\Post;

class WebController extends BaseController
{
    public function post($slug)
    {

        $data['post'] = Post::where('slug', $slug)->where('status', 1)->first();
        $data['page_title'] = $data['post']['title'];
        return view('post::web.post', $data);

      
    }

    public function category($slug)
    {
        $data['category'] = Category::where('slug', $slug)->first();

        if ($data['category']) {
            return view('post::web.category', $data);
        } else {
            return abort(404);
        }
        return view('post::web.category', $data);
    }
}
