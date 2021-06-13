<?php

namespace Modules\Activity\Repositories\Eloquents;

use Core\Supports\Repositories\Eloquents\BaseRepository;
use Illuminate\Support\Facades\DB;
use Modules\Activity\Models\Activity;
use Modules\Activity\Models\ActivityTranslation;
use Modules\Activity\Repositories\Interfaces\ActivityInterface;

class ActivityRepository extends BaseRepository implements ActivityInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Activity::class;
    }

    public function createActivity($request)
    {
        try {
            $data = $request->all();
            $oldActivity = $this->where('link', $data['link'])->first();
            if ($oldActivity) {
                ActivityTranslation::create([
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'activity_id' => $oldActivity['id'],
                    'locale' => $data['locale']
                ]);
            } else {
                DB::transaction(function () use ($data) {
                    $id_activity = $this->create([
                        'image' => $data['image'],
                        'link' => $data['link'],
                        'status' => $data['status'],
                        'order' => $this->max('order') ? $this->max('order') + 1 : 1
                    ])->id;
                    if ($id_activity) {
                        ActivityTranslation::create([
                            'title' => $data['title'],
                            'description' => $data['description'],
                            'activity_id' => $id_activity,
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

    public function updateActivity($request)
    {
        try {
            DB::transaction(function () use ($request) {
                ActivityTranslation::where('activity_id', $request->id)->where('locale', $request->locale)->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'activity_id' => $request->id
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
}
