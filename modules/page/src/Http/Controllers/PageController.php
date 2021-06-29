<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Core\Supports\Controllers\BaseController;
use Modules\Page\Http\Requests\PageRequest;
use Modules\Page\Repositories\Interfaces\PageInterface;

class PageController extends BaseController
{
    /**
     * PageController Constructor
     *
     * @param PageInterface $pageRepository
     */
    protected $pageRepository;

    function __construct(PageInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getList()
    {
        page_title()->setTitle(trans('page::admin.list_page'));
        $pages = $this->pageRepository->orderBy('id', 'desc')->paginate(20);
        $minOrder = $this->pageRepository->min('order');
        $maxOrder = $this->pageRepository->max('order');
        return view('page::admin.page.list', compact('pages', 'minOrder', 'maxOrder'));
    }

    public function getCreate()
    {
        page_title()->setTitle(trans('page::admin.add_page'));
        return view('page::admin.page.create');
    }

    public function postCreate(PageRequest $request)
    {
        $this->pageRepository->createPage($request);
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.addsuccess')]);
    }

    public function postGetSlugPage()
    {
        return response()->json(str_slug(request()->plainText));
    }

    /**
     * Ajax Change page
     */
    public function ajaxChangPage(Request $request)
    {
        $id = $request->id;
        $order = $request->order;
        $listPage = $this->pageRepository->getListPageWhereNotInID($id);
        $weight = 0;
        foreach ($listPage as $page) {
            ++$weight;
            if ($weight == $order) {
                ++$weight;
            }
            $this->pageRepository->update([
                'order' => $weight
            ], $page['id']);
        }
        $this->pageRepository->update([
            'order' => $order
        ], $id);
        mod_page_fix_page_order();
        $request->session()->flash('flash_data', ['type' => 'success', 'message' => trans('page::admin.updatesuccess')]);
        return response()->json([
            'status' => true,
            'message' => trans('page::admin.updatesuccess')
        ]);
    }

    public function ajaxChangeStatus(Request $request)
    {
        try {
            $this->pageRepository->update([
                'status' => $request->status,
            ], $request->id);
            return response()->json(['status' => true, 'msg' => trans('page::admin.updatesuccess')]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'msg' => trans('page::admin.notierror')]);
        }
    }

    public function getDelete(int $id)
    {
        $this->pageRepository->delete($id);
        mod_page_fix_page_order();
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.deletesuccess')]);
    }

    public function getEdit(int $id)
    {
        page_title()->setTitle(trans('page::admin.edit_page'));
        $page = $this->pageRepository->find($id);
        return view('page::admin.page.edit', compact('page'));
    }

    public function postEdit(PageRequest $request, int $id)
    {
        $this->pageRepository->editPage($request, $id);
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.editsuccess')]);
    }
}
