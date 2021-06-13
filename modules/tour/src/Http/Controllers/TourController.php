<?php

namespace Modules\Tour\Http\Controllers;

use Core\Supports\Controllers\BaseController;
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
        return view('tour::admin.tour.list', compact('tours'));
    }
}
