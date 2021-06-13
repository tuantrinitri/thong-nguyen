<?php

namespace Modules\Link\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use Modules\Link\Http\Requests\LinkRequest;
use Modules\Link\Repositories\Interfaces\LinkInterface;

class LinkController extends BaseController
{
    /**
     * LinkController Constructor
     *
     * @param LinkInterface $linkRepository
     */
    protected $linkRepository;
    function __construct(
        LinkInterface $linkRepository
    ) {
        $this->linkRepository = $linkRepository;
    }

    public function index()
    {
        page_title()->setTitle(trans('link::admin.list_link'));
        $links = $this->linkRepository->orderBy('id', 'desc')->paginate(15);
        return view('link::admin.link.list', compact('links'));
    }

    public function create()
    {
        page_title()->setTitle('Thêm liên kết');
        return view('link::admin.link.create');
    }
    public function store(LinkRequest $request)
    {
        page_title()->setTitle('Thêm liên kết');
        $this->linkRepository->createLink($request);
        return redirect()->route('link.admin.index')->with(
            'flash_data',
            ['type' => 'success', 'message' => 'Thêm liên kết thành công']
        );
    }
    public function edit($id)
    {
        page_title()->setTitle('Sửa liên kết');
        $link = $this->linkRepository->find($id);
        return view('link::admin.link.edit', compact('link'));
    }
    public function update(LinkRequest $request, $id)
    {
        page_title()->setTitle('Thêm liên kết');
        $this->linkRepository->updateLink($request, $id);
        return redirect()->route('link.admin.index')->with(
            'flash_data',
            ['type' => 'success', 'message' => 'Sửa liên kết thành công']
        );
    }
    public function delete()
    {
        page_title()->setTitle('Thêm liên kết');
        return view('link::admin.link.create');
    }
}
