<?php

namespace Modules\Activity\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Activity\Http\Requests\ActivityRequest;
use Modules\Activity\Models\ActivityTranslation;
use Modules\Activity\Repositories\Interfaces\ActivityInterface;

class ActivityController extends BaseController
{
    /**
     * ActivityController Constructor
     *
     * @param ActivityInterface $activityRepository
     */
    protected $activityRepository;
    function __construct(
        ActivityInterface $activityRepository
    ) {
        $this->activityRepository = $activityRepository;
    }
    public function index()
    {
        page_title()->setTitle('Quản lý hoạt động');
        $minOrder = $this->activityRepository->min('order');
        $maxOrder = $this->activityRepository->max('order');
        $activities = collect($this->activityRepository->orderBy('order', 'asc')->all());
        return view('activity::admin.activity.list', compact('activities', 'minOrder', 'maxOrder'));
    }

    public function create(Request $request)
    {
        page_title()->setTitle('Thêm tin hoạt động');
        $request = $request->all();
        $data = [];
        if (isset($request['activity_id'])) {
            $data['lang'] = $request['lang'];
            $data['oldActivity'] = $this->activityRepository->find($request['activity_id'])->first();
        }
        return view('activity::admin.activity.create', compact('data'));
    }

    public function store(ActivityRequest $request)
    {
        $this->activityRepository->createActivity($request);
        return redirect()->route('activity.admin.list')->with('flash_data', ['type' => 'success', 'message' => 'Thêm dữ liệu thành công']);
    }

    public function edit(Request $request, $id)
    {
        $data['activity'] = $this->activityRepository->find($id);
        $data['transtion'] = ActivityTranslation::where('activity_id', $id)->where('locale', $request->lang)->first();
        return view('activity::admin.activity.edit', $data);
    }

    public function update(ActivityRequest $request)
    {
        $this->activityRepository->updateActivity($request);
        return redirect()->route('page.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('activity::admin.editsuccess')]);
    }
    /**
     * Ajax Change page
     */
    public function ajaxChange(Request $request)
    {
        $id = $request->id;
        $order = $request->order;
        $listPage = $this->activityRepository->get();
        $weight = 0;
        foreach ($listPage as $page) {
            ++$weight;
            if ($weight == $order) {
                ++$weight;
            }
            $this->activityRepository->update([
                'order' => $weight
            ], $page['id']);
        }
        $this->activityRepository->update([
            'order' => $order
        ], $id);
        $request->session()->flash('flash_data', ['type' => 'success', 'message' => trans('activity::admin.updatesuccess')]);
        return response()->json([
            'status' => true,
            'message' => trans('activity::admin.updatesuccess')
        ]);
    }

    public function ajaxChangeStatus(Request $request)
    {
        try {
            $this->activityRepository->update([
                'status' => $request->status,
            ], $request->id);
            return response()->json(['status' => true, 'msg' => trans('activity::admin.updatesuccess')]);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'msg' => trans('activity::admin.notierror')]);
        }
    }

    public function delete(int $id)
    {
        $transtrion = ActivityTranslation::find($id);
        $checkDelete = ActivityTranslation::where('activity_id', $transtrion['activity_id'])->get()->count();
        if ($checkDelete == 2) {
            ActivityTranslation::where('id', $id)->delete($id);
        } else {
            $this->activityRepository->where('id', $transtrion['activity_id'])->delete();
            ActivityTranslation::where('id', $id)->delete($id);
        }
        return redirect()->route('activity.admin.list')->with('flash_data', ['type' => 'success', 'message' => trans('activity::admin.deletesuccess')]);
    }
}
