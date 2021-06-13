<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Core\Supports\Controllers\BaseController;
use Illuminate\Support\Facades\Config;
use Modules\Page\Http\Requests\PageRequest;
use Modules\Page\Repositories\Interfaces\PageInterface;
use Modules\Page\Repositories\Interfaces\PageTranslationInterface;

class PageController extends BaseController
{
    /**
     * PageController Constructor
     *
     * @param PageInterface $pageRepository
     */
    protected $pageRepository;

    function __construct(
        PageInterface $pageRepository,
        PageTranslationInterface $ptranRepository
    ) {
        $this->pageRepository = $pageRepository;
        $this->ptranRepository = $ptranRepository;
    }

    public function index()
    {
        page_title()->setTitle(trans('page::admin.list_page'));
        $minOrder = $this->pageRepository->min('order');
        $maxOrder = $this->pageRepository->max('order');
        $pages = collect($this->pageRepository->orderBy('order', 'asc')->index());
        return view('page::admin.page.list', compact('pages', 'minOrder', 'maxOrder'));
    }

    public function create(Request $request)
    {
        page_title()->setTitle(trans('page::admin.add_page'));
        $request = $request->all();
        $data = [];
        if (isset($request['page_id'])) {
            $data['lang'] = $request['lang'];
            $data['slug'] = $this->pageRepository->find($request['page_id'])->toArray()['slug'];
            $data['content'] = $this->pageRepository->find($request['page_id'])->toArray()['content'];
            $data['title'] = $this->pageRepository->with('ptranstion')->find(($request['page_id']))->toArray()['ptranstion'][0]['title'];
        }
        return view('page::admin.page.create', compact('data'));
    }

    public function store(PageRequest $request)
    {
        $this->pageRepository->createPage($request);
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.addsuccess')]);
    }

    public function edit(Request $request, $id)
    {
        $data['page'] = $this->pageRepository->find($id);
        $data['ptranstion'] = $this->ptranRepository->where('page_id', $id)->where('locale', $request->lang)->first();
        return view('page::admin.page.edit', $data);
    }

    public function update(PageRequest $request)
    {
        $this->pageRepository->updatePage($request);
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.editsuccess')]);
    }
    /**
     * Ajax Change page
     */
    public function ajaxChangePage(Request $request)
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

    public function delete(int $id)
    {
        $ptranstion = $this->ptranRepository->find($id);
        $checkDelete = $this->ptranRepository->where('page_id', $ptranstion['page_id'])->get()->count();
        if ($checkDelete == 2) {
            $this->ptranRepository->delete($id);
        } else {
            $this->pageRepository->where('id', $ptranstion['page_id'])->delete();
            $this->ptranRepository->delete($id);
        }
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('page::admin.deletesuccess')]);
    }
}
