<?php

namespace Modules\Tour\Http\Controllers;

use Core\Supports\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Modules\Tour\Models\Booking;
use Modules\Tour\Models\Location as ModelsLocation;
use Modules\Tour\Models\Tour;
use Modules\Tour\Models\TourContent;
use Modules\Tour\Repositories\Interfaces\TourInterface;

class TourController extends BaseController
{
    /**
     * TourController Constructor
     *
     * @param TourInterface $tourRepository
     */
    function __construct(
        TourInterface $tourRepository
    ) {
        $this->tourRepository = $tourRepository;
    }

    public function getList()
    {
        page_title()->setTitle(trans('tour::admin.list_tour'));
        $tours = $this->tourRepository->orderBy('id', 'desc')->paginate(20);
        // dd($tours);
        return view('tour::admin.tour.list', compact('tours'));
    }
    /**
     * tra ve view danh tạo mới tour
     */
    public function create()
    {
        $data['locations'] = ModelsLocation::orderBy('title', "asc")->get(); // lay danh sach dia diem cac tinh cua Viet Nam
        // dd($data);
        return view('tour::admin.tour.create', $data);
    }
    /*** */
    public function store(Request $request)
    {

        // dd($request->all());
        $tour = Tour::create([
            'title' => $request->title,
            'description' => $request->description,
            'tour_code' => $request->tour_code,
            'date_go' => $request->date_go,
            'price' => $request->price,
            'leave_from' => $request->leave_from,
            'total_date' => $request->total_date,
            'contact_us' => $request->contact_us,
            'locaion_id' => $request->locaion_id,
            'image_tour' => $request->image_tour,
            'status' => $request->status ?? 1,
        ]);

        $tour_content_new = $request->tour_content_programs;
        $tour_content_new['tour_id'] = 1;
        TourContent::create($tour_content_new);

        return redirect()->route('tour.admin.list')->with('flash_data', ['type' => 'success', 'message' => 'Đã thêm tour thành công']);
    }

    /**
     * 
     * Sua tour
     */

    public function edit($id)
    {
        $data['tour'] = Tour::find($id);
        $data['locations'] = ModelsLocation::get();
        return view('tour::admin.tour.edit', $data);
    }
    /**
     * Update Tour
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'tour_code' => $request->tour_code,
            'date_go' => $request->date_go,
            'price' => $request->price,
            'leave_from' => $request->leave_from,
            'total_date' => $request->total_date,
            'contact_us' => $request->contact_us,
            'locaion_id' => $request->locaion_id,
            'image_tour' => $request->image_tour,
            'status' => $request->status ?? 1,
        ]);

        $tour_content_new = $request->tour_content_programs;
        TourContent::where('tour_id', $id)->update($tour_content_new);

        return redirect()->route('tour.admin.list')->with('flash_data', ['type' => 'success', 'message' => 'Đã thêm tour thành công']);
    }


    public function delete($id)
    {
        $deleteContenTour = TourContent::where('tour_id', $id)->delete();
        $tourDelete = Tour::where('id', $id)->delete();

        return redirect()->route('tour.admin.list')->with('flash_data', ['type' => 'success', 'message' => 'Đã xoa tour thành công']);
    }
    public function location()
    {
        // dd()
        // dd(file_get_contents());
        $path = public_path('json/tinh-thanh.json');
        // dd($path);
        $file = cms_read_file_json($path);

        foreach ($file as $key => $value) {
            ModelsLocation::create([
                'title' => $value['name']
            ]);
        }
    }
    /**
     * danh sach khach dat tour
     */
    public function booking()
    {
        $data['bookings'] = Booking::where('status', 1)->get();
        return view('tour::admin.booking.list', $data);
    }
    /**
     * huy khach
     */
    public function cancel($id)
    {
        $data['bookings'] = Booking::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->route('tour.admin.booking')->with('flash_data', ['type' => 'success', 'message' => 'Đã xoa tour thành công']);
    }
}