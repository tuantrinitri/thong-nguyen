<?php

namespace Modules\Page\Repositories\Eloquents;

use Core\Supports\Repositories\Eloquents\BaseRepository;
use Illuminate\Support\Facades\DB;
use Modules\Page\Models\Page;
use Modules\Page\Repositories\Interfaces\PageInterface;
use Modules\Page\Repositories\Interfaces\PageTranslationInterface;

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

    public function index()
    {
        return  $this->with('ptranstion')->get();
    }

    public function createPage($request)
    {
        try {
            $data = $request->all();
            $oldPage = $this->where('slug', $data['slug'])->first();
            if ($oldPage) {
                app(PageTranslationInterface::class)->create([
                    'content' => $data['content'],
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'page_id' => $oldPage['id'],
                    'locale' => $data['locale']
                ]);
            } else {
                DB::transaction(function () use ($data) {
                    $id_page = $this->create([
                        'image' => $data['image'],
                        'slug' => $data['slug'],
                        'status' => $data['status'],
                        'order' => $this->max('order') ? $this->max('order') + 1 : 1
                    ])->id;
                    if ($id_page) {
                        app(PageTranslationInterface::class)->create([
                            'content' => $data['content'],
                            'title' => $data['title'],
                            'description' => $data['description'],
                            'page_id' => $id_page,
                            'locale' => $data['locale']
                        ]);
                    }
                });
            }
            return true;
        } catch (Throwable $th) {
            return $th;
        }
    }

    public function updatePage($request)
    {
        try {
            DB::transaction(function () use ($request) {
                app(PageTranslationInterface::class)->where('page_id', $request->id)->where('locale', $request->locale)->update([
                    'content' => $request->content,
                    'title' => $request->title,
                    'description' => $request->description,
                    'page_id' => $request->id
                ]);
                $this->update([
                    'image' => $request->image,
                    'slug' => $request->slug,
                    'status' => $request->status,
                ], $request->id);
            });
        } catch (Throwable $th) {
            return $th;
        }
    }

    public function getListPageWhereNotInID($id)
    {
        return Page::where([['id', '!=', $id]])->orderBy('order', 'asc')->get();
    }

    public function getDetailsPageBySlug($slug)
    {
        return Page::where('slug', $slug)->first();
    }
}
