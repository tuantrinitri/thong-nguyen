<?php

namespace Modules\Page\Repositories\Eloquents;

use Core\Supports\Repositories\Eloquents\BaseRepository;
use Modules\Page\Models\Page;
use Modules\Page\Repositories\Interfaces\PageInterface;

class PageRepository extends BaseRepository implements PageInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Page::class;
    }

    public function createPage($request)
    {
        $maxOrder = $this->max('order');
        $new_page = $this->create([
            'title' => $request->title,
            'slug' => empty($request->slug) ? str_slug($request->title) : $request->slug,
            'image' => $request->image,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_image' => $request->seo_image,
            'seo_keywords' => $request->seo_keywords,
            'order' => $maxOrder ? $maxOrder + 1 : 1
        ]);
        return $new_page;
    }

    public function editPage($request, $id)
    {
        $edit_page = $this->update([
            'title' => $request->title,
            'slug' => empty($request->slug) ? str_slug($request->title) : $request->slug,
            'image' => $request->image,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_image' => $request->seo_image,
            'seo_keywords' => $request->seo_keywords
        ], $id);
        return $edit_page;
    }

    public function getListPageWhereNotInID(int $id)
    {
        return Page::where([['id', '!=', $id]])->orderBy('order', 'asc')->get();
    }

    public function getDetailsPageBySlug(string $slug)
    {
        return Page::where('slug', $slug)->first();
    }
}
