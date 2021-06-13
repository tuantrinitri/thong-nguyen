<?php

namespace Modules\Link\Repositories\Eloquents;

use Core\Supports\Repositories\Eloquents\BaseRepository;
use Modules\Link\Models\Link;
use Modules\Link\Repositories\Interfaces\LinkInterface;

class LinkRepository extends BaseRepository implements LinkInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Link::class;
    }

    public function createLink($request)
    {
        try {
            $this->create([
                'title' => $request->title,
                'link' => $request->link,
                'type' => $request->type,
            ]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function updateLink($request, $id)
    {
        try {
            $this->update([
                'title' => $request->title,
                'link' => $request->link,
                'type' => $request->type,
            ], $id);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
